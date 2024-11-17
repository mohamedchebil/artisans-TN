<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Entity\Artisan;
use App\Form\AdminType;
use App\Repository\ArtisanRepository;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/admin')]

class AdminController extends AbstractController
{
    #[Route('', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/admin.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }


    #[Route('/artisan', name: 'app_artisan_index', methods: ['GET'])]
    public function ListeArtisan(ArtisanRepository $artisanRepository): Response
    {
        return $this->render('artisan/list_artisans.html.twig', [
            'artisans' => $artisanRepository->findAll(),
        ]);
    }
    #[Route('/artisan', name: 'app_client_index', methods: ['GET'])]
    public function ListClient(ClientRepository $clientRepository ): Response
    {
        return $this->render('client/index.html.twig', [
            'clients' => $clientRepository->findAll(),
        ]);
    }


    #[Route('/artisan/{id}', name: 'app_artisan_delete', methods: ['POST'])]
    public function deleteArtisan(Request $request, Artisan $artisan, EntityManagerInterface $entityManager): Response
    {
        $submittedToken = $request->request->get('_token');

        if ($this->isCsrfTokenValid('delete' . $artisan->getId(), $submittedToken)) {
            $entityManager->remove($artisan);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_artisan_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_admin_show', methods: ['GET'])]
    public function show(Admin $admin): Response
    {
        return $this->render('admin/show.html.twig', [
            'admin' => $admin,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Admin $admin, EntityManagerInterface $entityManager): Response
    {
       $form = $this->createForm(AdminType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/edit.html.twig', [
            'admin' => $admin,
            'form' => $form,
        ]);
    }



































}
