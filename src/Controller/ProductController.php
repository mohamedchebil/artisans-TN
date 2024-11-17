<?php

namespace App\Controller;

use App\Entity\Artisan;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProductController extends AbstractController
{



    ///hedhi mtaa lindex
    #[Route('/homepage', name: 'app_product_homepage', methods: ['GET'])]
    public function homepage(ProductRepository $productRepository, CategoryRepository $categoryRepository): Response
    {
        return $this->render('product/homepage.html.twig', [
            'products' => $productRepository->findAll(),
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    #[Route('artisan/product/new', name: 'app_product_new', methods: ['GET', 'POST'])]
    public function new(TokenInterface $token,Request $request, ProductRepository $productRepository, SluggerInterface $slugger): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        //bech tekhou user li connecté ejbed Token interface men fouk fel parametre baaed aamel ligne getUser baaed hot
        //traitement mateek f wost if user li theb tekhdem aalih fel acas mtaai ena artisan
        //baaed
        $user=$this->getUser();
        if ($user instanceof  Artisan) {


            if ($form->isSubmitted() && $form->isValid()) {
                $imageFile = $form->get('image')->getData();

                if ($imageFile) {
                    $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                    $imageDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/images';

                    try {
                        $imageFile->move($imageDirectory, $newFilename);
                    } catch (FileException $e) {
                        // Handle the file upload error
                        return $this->render('product/new.html.twig', [
                            'product' => $product,
                            'form' => $form->createView(),
                            'error' => 'Error uploading the image.'
                        ]);
                    }

                    $product->setImage($newFilename);
                    //settih kima theb enti setidClient()
                    $product->setIdArtisan($user);
                }

                // Save the product using the custom save method in the repository
                $productRepository->save($product, true);

                return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
            }
        }
        return $this->renderForm('product/new.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    ////Details dun produits
    #[Route('artisan/product/{id}', name: 'app_product_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('artisan/product/{id}/edit', name: 'app_product_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    /**
     * @throws \Exception
     */








}
