<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TicketType;
use App\Entity\Ticket;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;

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

        //Doctrine repository
        $ticketRepo = $this->getDoctrine()->getRepository(Ticket::class);

        //Récupération des tickets répondus du client connecté
        $ticketsAnsweredClient = $ticketRepo->findby(['owner' => $userId , 'statement' => 'répondu'],['level' => 'DESC','updateTime' => 'DESC']);

        //Récupération des tickets en attente du client connecté
        $ticketsPendingClient = $ticketRepo->findby(['owner' => $userId , 'statement' => 'en attente'],['level' => 'DESC','updateTime' => 'DESC']);

        //Récupération des tickets fermés du client connecté
        $ticketsClosedClient = $ticketRepo->findby(['owner' => $userId , 'statement' => 'fermé'],['level' => 'DESC','updateTime' => 'DESC']);


        dump($ticketsPendingClient);




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
        }


        return $this->render('main/ticket.html.twig', [
            'form' => $form->createView()
        ]);

    }
}
