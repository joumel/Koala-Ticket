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
        return $this->render('main/dash_admin.html.twig', [
            'controller_dash_admin' => 'Page administrateur',
        ]);
    }

    /**
     * @Route("/dashboard", name="dash_client")
     */
    public function dash_client(): Response
    {
        return $this->render('main/dash_client.html.twig', [
            'controller_dash_client' => 'Page client',
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

            // Si le formulaire a été envoyé, on dump notre ticket, qui est pré-rempli automatiquement avec les données provenant du formulaire !
            dump($newTicket);
        }


        return $this->render('main/ticket.html.twig', [
            'form' => $form->createView()
        ]);

    }
}
