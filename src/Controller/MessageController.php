<?php

namespace App\Controller;

use App\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class MessageController extends AbstractController
{
    /**
     * @Route("/messagerie", name="message")
     */
    public function index(AuthorizationCheckerInterface $authChecker)
    {
        /** Verification de l'identification */
        if (false === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('central_app_login');
        }
        /** End Verification de l'identification */

        /** Connexion aux repository */
        $entityManager = $this->getDoctrine()->getManager();

        $messages = $this->getUser()->getReceivedMessages();

        return $this->render('message/index.html.twig', [
            'controller_name' => 'MessageController',
            'messages' => $messages
        ]);
    }
}
