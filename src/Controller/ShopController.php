<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Media;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;

class ShopController extends AbstractController
{
    /**
     * @Route("/boutique-en-ligne", name="shop")
     */
    public function shop(AuthorizationCheckerInterface $authChecker, Request $request, SluggerInterface $slugger)
    {
        /** Verification de l'identification */
        if (false === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('central_app_login');
        }
        /** End Verification de l'identification */

        /** Connexion aux repository */
        $entityManager = $this->getDoctrine()->getManager();
        $product_repo = $this->getDoctrine()->getrepository(Product::class);
        $medias_repo = $this->getDoctrine()->getrepository(Media::class);

        $products = $product_repo->findAll();

        return $this->render('shop/index.html.twig', [
            'controller_name' => 'ShopController',
            'products' => $products
        ]);
    }
}
