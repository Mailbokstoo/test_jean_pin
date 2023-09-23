<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\PersonneType;
use App\Entity\Personne;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class ShowPersonneController extends AbstractController
{
    #[Route('/', name: 'app_show_personne')]
    public function index(Request $request,EntityManagerInterface $entityManager,): Response
    {

        $form = $this->createForm(PersonneType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $new_personne = new Personne();
            $new_personne->setPrenom($form->get('prenom')->getData());
            $new_personne->setNom($form->get('nom')->getData());
            $new_personne->setDateDeNaissance($form->get('date_de_naissance')->getData());
            $entityManager->persist($new_personne);
            $entityManager->flush();
        }


        return $this->render('show_personne/index.html.twig', [
            'PersonneType' => $form->createView(),
        ]);
    }

    #[Route('/visualiser', name: 'show_all_personne')]
    public function showAllPersonne(ManagerRegistry $doctrine): Response
    {
        $all_personne = $doctrine->getRepository(Personne::class)->findAll();

        dd($all_personne);

        return $this->render('show_personne/show_all_personne.html.twig', [
            'controller_name' => 'ShowPersonneController',
        ]);
    }
}
