<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Entity\Artisan;
use App\Entity\Client;
use App\Entity\Product;
use App\Form\AdminType;
use App\Repository\AdminRepository;
use App\Repository\ArtisanRepository;
use App\Repository\ClientRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/listclients', name: 'app_client_index1', methods: ['GET'])]
    public function index1(Request $request ,ClientRepository $clientRepository): Response
    {
        $searchTerm = $request->query->get('search');

        if ($searchTerm) {
            $clients = $clientRepository ->findBySearchTerm($searchTerm);
        } else {
            $clients = $clientRepository->findAll();
        }
        return $this->render('admin/list-client.html.twig', [
            'clients' => $clients,
        ]);
    }

    #[Route('/client/{id}', name: 'app_client_delete1', methods: ['POST'])]
    public function delete1(Request $request, Client $client, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$client->getId(), $request->request->get('_token'))) {
            $entityManager->remove($client);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_client_index1', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/listproducts', name: 'app_adminproduct_index', methods: ['GET'])]
    public function adminproducts(Request $request,ProductRepository $productRepository): Response
    {

        $searchTerm = $request->query->get('search');

        if ($searchTerm) {
            $products = $productRepository ->findBySearchTerm($searchTerm);
        } else {
            $products = $productRepository->findAll();
        }
        return $this->render('admin/adminproducts.html.twig', [
            'products' => $products,
        ]);
    }
    #[Route('/product/{id}', name: 'app_product_delete1', methods: ['POST'])]
    public function deleteproduct(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_adminproduct_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/listartisans', name: 'app_artisan_index', methods: ['GET'])]
    public function index(Request $request ,ArtisanRepository $artisanRepository): Response
    {
        $searchTerm = $request->query->get('search');

        if ($searchTerm) {
            $artisans = $artisanRepository ->findBySearchTerm($searchTerm);
        } else {
            $artisans = $artisanRepository->findAll();
        }
        return $this->render('admin/list_artisans.html.twig', [
            'artisans' => $artisans,
        ]);
    }

    #[Route('/artisan/{id}', name: 'app_artisan_delete', methods: ['POST'])]
    public function delete(Request $request, Artisan $artisan, EntityManagerInterface $entityManager): Response
    {
        $submittedToken = $request->request->get('_token');

        if ($this->isCsrfTokenValid('delete' . $artisan->getId(), $submittedToken)) {
            $entityManager->remove($artisan);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_artisan_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/dashboard', name: 'app_admin-dashboard')]
    public function dashboard(EntityManagerInterface $entityManager,ProductRepository $productRepository,ClientRepository $clientRepository,ArtisanRepository $artisanRepository): Response
    {
        // Replace these with your actual logic to fetch data from the database

        $productCount = $productRepository->count([]);
        $artisanCount = $artisanRepository->count([]);
        $clientCount =$clientRepository->count([]);
        $events = $entityManager->getRepository('App\Entity\Event')->findAll();

        $eventCounts = [];

        foreach ($events as $event) {
            $monthYear = $event->getDateEvent()->format('F Y');

            if (!isset($eventCounts[$monthYear])) {
                $eventCounts[$monthYear] = 0;
            }

            $eventCounts[$monthYear]++;
        }
        return $this->render('admin/dashboard.html.twig', [
            'numberOfClients' => $clientCount,
            'numberOfArtisans' => $artisanCount,
            'numberOfProducts' => $productCount,
            'eventCounts' => json_encode($eventCounts),
        ]);




    }





}

