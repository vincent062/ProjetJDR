<?php

namespace App\Controller;

use App\Form\ContactForm;
use App\Repository\ContactsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(ContactsRepository $contacts_repository,  Request $request,EntityManagerInterface $em): Response
    {

        $form = $this->createForm(ContactForm::class); 
        $form->handleRequest($request);
         
        if ($form->isSubmitted()&&$form->isValid()) {
            $data = $form->getdata();
            $em->persist($data);
            $em->flush();
        }
        return $this->render('contact/index.html.twig', [
          'contacts' => $contacts_repository->findAll(),
          'form' => $form->createView(),
        ]);
    }
}
