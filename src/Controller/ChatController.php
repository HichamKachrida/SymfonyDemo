<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\User;
use App\Form\MessageType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class ChatController extends AbstractController
{
    /**
     * @Route("/chat/{id}", name="chat")
     */
    public function index($id, AuthorizationCheckerInterface $authChecker, Request $request)
    {
        /** Verification de l'identification */
        if (false === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('central_app_login');
        }
        /** End Verification de l'identification */

        /** Connexion aux repository */
        $entityManager = $this->getDoctrine()->getManager();
        $users_repo = $this->getDoctrine()->getrepository(User::class);
        $messages_repo = $this->getDoctrine()->getrepository(Message::class);

        /** Recuperation de l'utilisateur en cours */
        $user = $users_repo->findOneBy(['id' => $this->getUser()->getId()]);

        if(!$user instanceof User) {
            return $this->redirectToRoute('index');
        }

        /** Recuperation de la destination */
        $destination = $users_repo->findOneBy(['id' => $id]);

        if(!$destination instanceof User) {
            return $this->redirectToRoute('index');
        }

        /** On recupere les messages */
        $connexion = $entityManager->getConnection();
        $sql = "SELECT * FROM message WHERE (sender_id = ? AND recipient_id = ?) OR (sender_id = ? AND recipient_id = ?) ORDER BY date ASC";
        $stmt = $connexion->prepare($sql);
        $stmt->bindValue(1, $user->getId());
        $stmt->bindValue(2, $destination->getId());
        $stmt->bindValue(3, $destination->getId());
        $stmt->bindValue(4, $user->getId());
        $stmt->execute();
        $query = $stmt->fetchAll();

        $messages = [];
        foreach($query as $message){
            $messages[] = $messages_repo->find(['id' => $message['id']]);
            if(!$message['opened']){
                $message = $messages_repo->findOneBy(['id' => $message['id']]);
                $message->setOpened(new \DateTime());
                $entityManager->persist($message);
                $entityManager->flush();
            }
        }

        /** Formulaire de post */
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message, array('csrf_protection' => false));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** Enregistrement du message */
            $message->setDate(new \DateTime());
            $message->setSender($user);
            $message->setRecipient($destination);
            $entityManager->persist($message);
            $entityManager->flush();

            /** Création de la reponse */
            if($user->getProfilPic()){ $picture = 'uploads/medias/'.$user->getProfilPic()->getFile(); }
            else { $picture = 'images/user/base.jpg'; }

            $response = new JsonResponse([
                'content' => $message->getContent(),
                'date' => $message->getDate()->format('H:i d/m/Y'),
                'class' => 'end',
                'picture' => $picture
            ]);

            return $response;
        }

        return $this->render('chat/index.html.twig', [
            'controller_name' => 'ChatController',
            'form' => $form->createView(),
            'messages' => $messages,
            'destination' => $destination
        ]);
    }

    /**
     * @Route("/getchat/{id}", name="getchat")
     */
    public function getChat($id, AuthorizationCheckerInterface $authChecker, Request $request)
    {
        /** Verification de l'identification */
        if (false === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('central_app_login');
        }
        /** End Verification de l'identification */

        /** Connexion aux repository */
        $entityManager = $this->getDoctrine()->getManager();
        $users_repo = $this->getDoctrine()->getrepository(User::class);
        $messages_repo = $this->getDoctrine()->getrepository(Message::class);

        /** Recuperation de l'utilisateur en cours */
        $user = $users_repo->findOneBy(['id' => $this->getUser()->getId()]);

        if(!$user instanceof User) {
            return $this->redirectToRoute('index');
        }

        /** Recuperation de la destination */
        $destination = $users_repo->findOneBy(['id' => $id]);

        if(!$destination instanceof User) {
            return $this->redirectToRoute('index');
        }

        /** On recupere les messages */
        $messages = $messages_repo->findBy([
            'opened' => NULL,
            'recipient' => $user
        ]);

        $data = [];
        foreach($messages as $message){
            $message->setOpened(new \DateTime());
            $entityManager->persist($message);
            $entityManager->flush();

            if($destination->getProfilPic()){ $picture = 'uploads/medias/'.$destination->getProfilPic()->getFile(); }
            else { $picture = 'images/user/base.jpg'; }

            $data[] = [
                'content' => $message->getContent(),
                'date' => $message->getDate()->format('H:i d/m/Y'),
                'class' => 'start',
                'picture' => $picture
            ];
        }

        /** Création de la reponse */
        $response = new JsonResponse($data);

        return $response;
    }
}
