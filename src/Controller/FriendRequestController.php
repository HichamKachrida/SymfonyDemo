<?php

namespace App\Controller;

use App\Entity\Friendship;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class FriendRequestController extends AbstractController
{
    /**
     * @Route("/amis/demandes", name="friend_request")
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
        $friendship_repo = $this->getDoctrine()->getrepository(Friendship::class);
        $users_repo = $this->getDoctrine()->getrepository(User::class);

        /** On recupere l'utilisateur courant */
        $currentUser = $users_repo->find($this->getUser()->getId());

        $friendshipRequests = $friendship_repo->findBy([
            'destination' => $currentUser->getId(),
            'status' => '0'
        ]);

        return $this->render('friend_request/index.html.twig', [
            'controller_name' => 'FriendRequestController',
            'friendshipRequests' => $friendshipRequests
        ]);
    }

    /**
     * @Route("/amis/accepter/{source}", name="friend_accept")
     */
    public function accepte($source, AuthorizationCheckerInterface $authChecker)
    {
        /** Verification de l'identification */
        if (false === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('central_app_login');
        }
        /** End Verification de l'identification */

        /** Connexion aux repository */
        $entityManager = $this->getDoctrine()->getManager();
        $friendship_repo = $this->getDoctrine()->getrepository(Friendship::class);
        $users_repo = $this->getDoctrine()->getrepository(User::class);

        /** On recupere l'utilisateur courant */
        $currentUser = $users_repo->find($this->getUser()->getId());

        /** On recupere la source de la demande */
        $source = $users_repo->find($source);

        /** Verification de l'utilisateur source */
        if(!$source instanceof User){
            return $this->redirectToRoute('index');
        }

        $friendshipRequest = $friendship_repo->findOneBy([
            'source' => $source->getId(),
            'destination' => $currentUser->getId(),
            'status' => 0
        ]);

        /** Verification de la demande d'ami */
        if(!$friendshipRequest instanceof Friendship){
            return $this->redirectToRoute('index');
        }

        $friendshipRequest->setStatus(1);
        $entityManager->persist($friendshipRequest);
        $entityManager->flush();

        /** Redirection vers le profil source */
        return $this->redirectToRoute('profil', ['id' => $source->getId()]);
    }

    /**
     * @Route("/amis/refuser/{source}", name="friend_refuse")
     */
    public function refuse($source, AuthorizationCheckerInterface $authChecker)
    {
        /** Verification de l'identification */
        if (false === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('central_app_login');
        }
        /** End Verification de l'identification */

        /** Connexion aux repository */
        $entityManager = $this->getDoctrine()->getManager();
        $friendship_repo = $this->getDoctrine()->getrepository(Friendship::class);
        $users_repo = $this->getDoctrine()->getrepository(User::class);

        /** On recupere l'utilisateur courant */
        $currentUser = $users_repo->find($this->getUser()->getId());

        /** On recupere la source de la demande */
        $source = $users_repo->find($source);

        /** Verification de l'utilisateur source */
        if(!$source instanceof User){
            return $this->redirectToRoute('index');
        }

        $friendshipRequest = $friendship_repo->findOneBy([
            'source' => $source->getId(),
            'destination' => $currentUser->getId(),
            'status' => 0
        ]);

        /** Verification de la demande d'ami */
        if(!$friendshipRequest instanceof Friendship){
            return $this->redirectToRoute('index');
        }

        $friendshipRequest->setStatus(2);
        $entityManager->persist($friendshipRequest);
        $entityManager->flush();

        /** Redirection vers le profil source */
        return $this->redirectToRoute('friend_request');
    }

    /**
     * @Route("/amis/demandes_navbar", name="friend_request_navbar")
     */
    public function navbar(AuthorizationCheckerInterface $authChecker)
    {
        /** Verification de l'identification */
        if (false === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('central_app_login');
        }
        /** End Verification de l'identification */

        /** Connexion aux repository */
        $entityManager = $this->getDoctrine()->getManager();
        $friendship_repo = $this->getDoctrine()->getrepository(Friendship::class);
        $users_repo = $this->getDoctrine()->getrepository(User::class);

        /** On recupere l'utilisateur courant */
        $currentUser = $users_repo->find($this->getUser()->getId());

        $friendshipRequests = $friendship_repo->findBy([
            'destination' => $currentUser->getId(),
            'status' => '0'
        ]);

        return $this->render('friend_request/navbar.html.twig', [
            'controller_name' => 'FriendRequestController',
            'friendshipRequests' => $friendshipRequests
        ]);
    }
}
