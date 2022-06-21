<?php

namespace App\Controller;

use App\Entity\Media;
use App\Entity\Post;
use App\Entity\User;
use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(AuthorizationCheckerInterface $authChecker, Request $request, SluggerInterface $slugger)
    {
        /** Verification de l'identification */
        if (false === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('central_app_login');
        }
        /** End Verification de l'identification */

        /** Connexion aux repository */
        $entityManager = $this->getDoctrine()->getManager();
        $posts_repo = $this->getDoctrine()->getrepository(Post::class);
        $medias_repo = $this->getDoctrine()->getrepository(Media::class);

        /** Recuperation des derniers posts */
        $posts = $posts_repo->findBy([], [
            'postDate' => 'DESC'
        ],
            10,
            0);

        /** Formulaire de post */
        $post = new Post();
        $form = $this->createForm(PostType::class, $post, array('csrf_protection' => false));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** Gestion du media */
            $tmpMedia = $form->get('media')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($tmpMedia) {
                $originalFilename = pathinfo($tmpMedia->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$tmpMedia->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $tmpMedia->move(
                        $this->getParameter('medias_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $media = new Media();
                $media->setUser($this->getUser());
                $media->setFile($newFilename);
                $media->setDate(new \DateTime());
                $entityManager->persist($media);

                $post->setMedia($media);
            }

            $post = $form->getData();
            $post->setUser($this->getUser());
            $post->setPostDate(new \DateTime());

            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'form' => $form->createView(),
            'posts' => $posts,
        ]);
    }
}
