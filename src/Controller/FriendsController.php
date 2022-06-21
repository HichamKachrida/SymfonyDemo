<?php

namespace App\Controller;

use App\Entity\Friendship;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class FriendsController extends AbstractController
{
    /**
     * @Route("/amis", name="friends")
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
        $users_repo = $this->getDoctrine()->getrepository(User::class);

        /** On recupere l'utilisateur courant */
        $currentUser = $users_repo->find($this->getUser()->getId());

        /** On recupere la liste des amis */
        $connexion = $entityManager->getConnection();
        $sql = "SELECT * FROM friendship WHERE (source_id = ? OR destination_id = ?) AND status = 1";
        $stmt = $connexion->prepare($sql);
        $stmt->bindValue(1, $currentUser->getId());
        $stmt->bindValue(2, $currentUser->getId());
        $stmt->execute();
        $friendsCheck = $stmt->fetchAll();

        $friends = array();

        foreach ($friendsCheck as $element){
            if($element['source_id'] == $currentUser->getId()){
                $friends[] = $users_repo->find($element['destination_id']);
            }
            else {
                $friends[] = $users_repo->find($element['source_id']);
            }
        }

        return $this->render('friends/index.html.twig', [
            'controller_name' => 'FriendsController',
            'friends' => $friends
        ]);
    }

    /**
     * @Route("/demander-en-amis/{id}", name="add_friend")
     */
    public function addFriend($id, AuthorizationCheckerInterface $authChecker)
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

        /** On verifie que la destination existe */
        $destination = $users_repo->find($id);

        if(!$destination instanceof User){
            return $this->redirectToRoute('index');
        }

        /** On recupere l'utilisateur en cours */
        $source = $users_repo->find($this->getUser()->getId());

        if(!$source instanceof User){
            return $this->redirectToRoute('index');
        }

        /** On verifie que la demande n'existe pas déjà */
        $connexion = $entityManager->getConnection();
        $sql = "SELECT * FROM friendship WHERE (source_id = ? AND destination_id = ?) OR (source_id = ? AND destination_id = ?)";
        $stmt = $connexion->prepare($sql);
        $stmt->bindValue(1, $source->getId());
        $stmt->bindValue(2, $destination->getId());
        $stmt->bindValue(3, $destination->getId());
        $stmt->bindValue(4, $source->getId());
        $stmt->execute();
        $checkFriend = $stmt->fetchAll();

        if(empty($checkFriend)){
            $friend = new Friend();
            $friend->setSource($source);
            $friend->setDestination($destination);
            $friend->setDate(new \DateTime());
            $friend->setStatus(0);
            $entityManager->persist($friend);
            $entityManager->flush();
        }

        return $this->redirectToRoute('profil', ['id' => $id]);
    }

    public function friendsSidebar(AuthorizationCheckerInterface $authChecker)
    {
        /** Verification de l'identification */
        if (false === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('central_app_login');
        }
        /** End Verification de l'identification */

        /** Connexion aux repository */
        $entityManager = $this->getDoctrine()->getManager();
        $users_repo = $this->getDoctrine()->getrepository(User::class);

        /** On recupere l'utilisateur en cours */
        $user = $users_repo->find($this->getUser()->getId());

        if(!$user instanceof User){
            return $this->redirectToRoute('index');
        }

        /** On verifie que la demande n'existe pas déjà */
        $connexion = $entityManager->getConnection();
        $sql = "SELECT * FROM friendship WHERE (source_id = ? OR destination_id = ?) AND status = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->bindValue(1, $user->getId());
        $stmt->bindValue(2, $user->getId());
        $stmt->bindValue(3, '1');
        $stmt->execute();
        $query = $stmt->fetchAll();

        $friendsUnfiltered = [];

        foreach ($query as $element){
            if($element['source_id'] == $user->getId()){ $friendsUnfiltered[] = $users_repo->findOneBy(['id' => $element['destination_id']]); }
            else { $friendsUnfiltered[] = $users_repo->findOneBy(['id' => $element['source_id']]); }
        }

        $known = array();
        $friends = array_filter($friendsUnfiltered, function ($val) use (&$known) {
            $unique = !in_array($val->getId(), $known);
            $known[] = $val->getId();
            return $unique;
        });

        return $this->render('right_sidebar.html.twig', [
            'controller_name' => 'FriendsController',
            'friends' => $friends
        ]);
    }
}
