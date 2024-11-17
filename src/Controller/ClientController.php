<?php

namespace App\Controller;

use App\Entity\Client;
use App\Controller\SecurityController;
use App\Form\ChangePasswordFormType;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

#[Route('/client')]
class ClientController extends AbstractController

{

    #[Route('/', name: 'app_client_index', methods: ['GET'])]
    public function index(ClientRepository $clientRepository): Response
    {
        return $this->render('client/index.html.twig', [
            'clients' => $clientRepository->findAll(),
        ]);
    }
    #[Route('/{id}', name: 'app_client_show', methods: ['GET'])]
    public function show(Client $client): Response
    {
        return $this->render('client/show.html.twig', [
            'client' => $client,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_client_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Client $client, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           $genre =$form->get('genre')->getData();
           $client->setGenre($genre);
           $entityManager->flush();
           return $this->redirectToRoute('app_product_homepage', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('client/edit.html.twig', [
            'client' => $client,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_client_delete', methods: ['POST'])]
    public function delete(SessionInterface $session,TokenStorageInterface $tokenStorage,Request $request, Client $client, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$client->getId(), $request->request->get('_token'))) {

            $tokenStorage->setToken(null);
            $session->invalidate();
            $entityManager->remove($client);
            $entityManager->flush();

        }
        return $this->redirectToRoute('app_product_homepage', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/editpasswordClient', name: 'app_client_editpassword', methods: ['GET', 'POST'])]
    public function editPassword(Request $request, UserPasswordHasherInterface $userPasswordHasher, Client $client, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $client->setPassword(
                $userPasswordHasher->hashPassword(
                    $client,
                    $form->get('plainPassword')->getData()
                )
            );

            $client->setRoles(['ROLE_CLIENT']);

            $entityManager->persist($client);
            $entityManager->flush();

            return $this->redirectToRoute('app_product_homepage', ['id' => $client->getId()]);

        }
        return $this->render('client/editpassword.html.twig', [
            'form' => $form->createView(),
        ]);


    }

}
