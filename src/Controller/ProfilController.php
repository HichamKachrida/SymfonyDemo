<?php

namespace App\Controller;

use App\Entity\Friendship;
use App\Entity\Media;
use App\Entity\Post;
use App\Entity\User;
use App\Form\EditProfilType;
use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil/{id}", name="profil")
     */
    public function index($id, AuthorizationCheckerInterface $authChecker, Request $request, SluggerInterface $slugger)
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
        $users_repo = $this->getDoctrine()->getrepository(User::class);
        $friendship_repo = $this->getDoctrine()->getrepository(Friendship::class);

        /** On recupere l'utilisateur courant */
        $currentUser = $users_repo->find($this->getUser()->getId());

        /** Recuperation de l'utilisateur */
        $user = $users_repo->find($id);

        /** Verification de l'utilisateur */
        if(!$user instanceof User){
            return $this->redirectToRoute('index');
        }

        /** Verification de la possibilité de l'ajouter en ami */
        if($user->getId() != $currentUser->getId()){
            $qb = $friendship_repo->createQueryBuilder('f');
            $query = $qb
                ->where('f.source = :user AND f.destination = :current')
                ->orWhere('f.source = :current AND f.destination = :user')
                ->setParameter('user', $user->getId())
                ->setParameter('current', $currentUser->getId())
                ->setMaxResults(1)
                ->getQuery();

            $result = $query->getOneOrNullResult();

            if(!empty($result)){
                if($result->getStatus() == 0){
                    $user->friendable = 'pending';
                }
                else {
                    $user->friendable = false;
                }
            }
            else {
                $user->friendable = true;
            }
        }
        else {
            $user->friendable = false;
        }

        /** On compte le nombre d'amis de l'utilisateur */
        $qb = $friendship_repo->createQueryBuilder('f');
        $query = $qb
            ->where('f.source = :current OR f.destination = :current AND f.status = :status')
            ->setParameter('current', $currentUser->getId())
            ->setParameter('status', '1')
            ->getQuery();

        $friendsCount = $query->getResult();

        /** Recuperation des derniers posts */
        $posts = $posts_repo->findBy([
            'user' => $user->getId()
        ], [
            'postDate' => 'DESC'
        ],
            10,
            0);;

        /** Recuperation des dernieres photos */
        $photos = $medias_repo->findBy([
            'user' => $user->getId()
        ],[
            'date' => 'DESC'
        ],
            9,
            0
        );

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

            return $this->redirectToRoute('profil', ['id' => $user->getId()]);
        }

        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
            'form' => $form->createView(),
            'posts' => $posts,
            'user' => $user,
            'photos' => $photos,
            'friendsCount' => $friendsCount
        ]);
    }

    /**
     * @Route("/editer-mon-profil/{id}", name="editer_profil")
     */
    public function editerProfil($id, AuthorizationCheckerInterface $authChecker, Request $request, SluggerInterface $slugger)
    {
        /** Verification de l'identification */
        if (false === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('central_app_login');
        }
        /** End Verification de l'identification */

        /** Connexion aux repository */
        $entityManager = $this->getDoctrine()->getManager();
        $users_repo = $this->getDoctrine()->getrepository(User::class);

        /** On recupere l'utilisateur courant */
        $currentUser = $users_repo->find($this->getUser()->getId());

        /** Recuperation de l'utilisateur */
        $user = $users_repo->find($id);

        /** Verification de l'utilisateur */
        if(!$user instanceof User OR $user->getId() != $this->getUser()->getId()){
            return $this->redirectToRoute('index');
        }

        /** Formulaire de profil */
        $form = $this->createForm(EditProfilType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        }

        return $this->render('profil/edit_profil.html.twig', [
            'controller_name' => 'ProfilController',
            'form' => $form->createView(),
        ]);
    }
}
