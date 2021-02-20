<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TicketType;
use App\Entity\Ticket;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;
use App\Entity\Message;
use App\Form\CreateMessageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_home")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_home' => 'Page d\'acceuil',
        ]);
    }

    /**
     * @Route("/article", name="article")
     */
    public function article(): Response
    {
        return $this->render('main/article.html.twig', [
            'controller_article' => 'Page article',
        ]);
    }

    /**
     * @Route("/dashboard/admin", name="dash_admin")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function dash_admin(): Response
    {

        $ticketRepo = $this->getDoctrine()->getRepository(Ticket::class);


        //Récupération des tickets répondus
        $ticketsAnswered = $ticketRepo->findBy(['statement' => 'répondu'], ['level' => 'DESC','updateTime' => 'DESC']);

        //Récupération des tickets en attente
        $ticketsPending = $ticketRepo->findBy(['statement' => 'en attente'], ['level' => 'DESC','updateTime' => 'DESC']);

        //Récupération des tickets fermés
        $ticketsClosed = $ticketRepo->findBy(['statement' => 'fermé'], ['level' => 'DESC','updateTime' => 'DESC']);


        return $this->render('main/dash_admin.html.twig', [
            'controller_dash_admin' => 'Page administrateur',
            'ticketsAnswered' => $ticketsAnswered,
            'ticketsPending' => $ticketsPending,
            'ticketsClosed' => $ticketsClosed,
        ]);
    }

    /**
     * @Route("/dashboard", name="dash_client")
     */
    public function dash_client(): Response
    {


        //Récupération de l'id de l'utilisateur connecté
        $userId = $this->getUser()->getId();
        $userRoles = $this->getUser()->getRoles();

        //Doctrine repository
        $ticketRepo = $this->getDoctrine()->getRepository(Ticket::class);

        //Récupération des tickets répondus du client connecté
        $ticketsAnsweredClient = $ticketRepo->findby(['owner' => $userId , 'statement' => 'répondu'],['level' => 'DESC','updateTime' => 'DESC']);

        //Récupération des tickets en attente du client connecté
        $ticketsPendingClient = $ticketRepo->findby(['owner' => $userId , 'statement' => 'en attente'],['level' => 'DESC','updateTime' => 'DESC']);

        //Récupération des tickets fermés du client connecté
        $ticketsClosedClient = $ticketRepo->findby(['owner' => $userId , 'statement' => 'fermé'],['level' => 'DESC','updateTime' => 'DESC']);
        
        if ($userRoles[0] == 'ROLE_ADMIN') {
            return $this->redirectToRoute('dash_admin');
        };

        return $this->render('main/dash_client.html.twig', [
            'controller_dash_client' => 'Page client',
            'ticketsAnsweredClient' => $ticketsAnsweredClient,
            'ticketsPendingClient' => $ticketsPendingClient,
            'ticketsClosedClient' => $ticketsClosedClient,
        ]);
    }

    /**
     * @Route("/faq", name="faq")
     */
    public function faq(): Response
    {
        return $this->render('main/faq.html.twig', [
            'controller_faq' => 'Page faq',
        ]);
    }

     /**
     * Page permettant de créer un nouveau ticket
     *
     * @Route("/creer-un-ticket", name="create_ticket")
     */
    public function createTicket(Request $request): Response
    {

        $user = $this->getUser();
        // Création d'un nouvel objet de la classe Ticket, vide pour le moment
        $newTicket = new Ticket();

        $form = $this->createForm(TicketType::class, $newTicket);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

             // defaut time zone
             date_default_timezone_set('Europe/Paris');

             // Set creation_date
             $newTicket->setCreationDate(
                new DateTime()
            );

             // Set update_time
             $newTicket->setUpdateTime(
                new DateTime()
            );

            //Set owner
            $newTicket->setOwner(
                $this->getUser()
            );

            // récupération du manager des entités et sauvegarde en BDD de $newTicket
            $em = $this->getDoctrine()->getManager();
            $em->persist($newTicket);
            $em->flush();

            // Redirection sur le ticket crée
            return $this->redirectToRoute('view_ticket', array('slug' => $newTicket->getSlug()));
        }

        dump($newTicket->getSlug());


        return $this->render('main/ticket.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * Page affichage ticket et réponses
     *
     * @Route("/voir-le-ticket/{slug}", name="view_ticket"))
     */
    public function CreateMessage(Ticket $ticket, Request $request) : response
    {
        $userId = $this->getUser()->getId();
        date_default_timezone_set('Europe/Paris');

        $messageRepo = $this->getDoctrine()->getRepository(Message::class);
        $ticketInfo = $this->getDoctrine()->getRepository(Ticket::class);
        $userInfo = $this->getDoctrine()->getRepository(User::class);

        $messageInfo = $messageRepo->FindBy(['id' => $ticket]);
        $actualTicket = $ticketInfo->findOneBy(['id' => $ticket]);
        $authorOfTicket = $userInfo->findby(['id' => $userId]);

        //Récupération de tous les messages concernant un ticket
        $messageConversation = $messageRepo->findBy(['ticketTarget' => $actualTicket->getId()]); // 6 array
        $lastMessageId = $messageRepo->findOneBy(['ticketTarget' => $actualTicket], ['id' => 'desc']); // Dernier message

        // Récupération du statut actuel du ticket
        $actualStatement = $actualTicket->getStatement();

        // Création du formulaire
        $newMessage = new Message();
        $newTicket = new Ticket();
        $form = $this->createForm(CreateMessageType::class, $newMessage);

        // Envoi du formulaire
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $newMessage->setDate(new DateTime());
            $newMessage->setTicketTarget($ticket);
            $newMessage->setAuthor($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($newMessage);
            $em->flush();

            $actualTicket->setUpdateTime(
                new DateTime()
            );

            $em->flush();

            //Rechargement de la page pour afficher les nouveaux messages
            return $this->redirect($request->getUri());
            
        }

        if (!empty($messageConversation)) {

            // Récupération du rôle du dernier autheur du dernier message
            $lastAuthorRole = $lastMessageId->getAuthor()->getRoles();

            //Changement du statut du ticket en fonction du répondant
            if ($lastAuthorRole[0] == "ROLE_ADMIN") {
                $actualTicket->setStatement("répondu");
            } else {
                $actualTicket->setStatement("en attente");
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($actualTicket);
            $em->flush();
        }


        return $this->render('main/viewTicket.html.twig', [
            'form' => $form->createView(),
            'actualTicket' => $actualTicket,
            'authorOfTicket' => $authorOfTicket,
            'messageInfo' => $messageInfo,
            'messageConversation' => $messageConversation,
        ]);
    }

    /**
     * Page permettant de fermer un ticket
     *
     * @Route("/fermer/{slug}/", name="close_ticket")
     */
    public function closeTicket(Ticket $ticket, Request $request): Response
    {
        $ticketInfo = $this->getDoctrine()->getRepository(Ticket::class);
        $em = $this->getDoctrine()->getManager();
        $actualTicketToClose = $ticketInfo->findOneBy(['id' => $ticket]);
        $TicketToClose = $actualTicketToClose->setStatement('fermé');
        $em->flush();

        dump($actualTicketToClose);

        // Redirection au dashboard
        return $this->redirectToRoute('dash_client');


    }

}
