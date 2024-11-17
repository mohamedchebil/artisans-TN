<?php

namespace App\Controller;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


use App\Entity\Artisan;
use App\Entity\Product;
use App\Entity\ResetPasswordRequest;
use App\Form\Artisan1Type;
use App\Form\ChangePasswordFormType;
use App\Repository\ArtisanRepository;
use App\Repository\ProductRepository;
use App\Repository\ResetPasswordRequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

#[Route('/artisan')]
class ArtisanController extends AbstractController
{

    private \App\Controller\SecurityController $security ;

    public function __construct(SecurityController $security)
    {
        $this->security = $security;
    }

    #[Route('/', name: 'app_artisan_index', methods: ['GET'])]
    public function index(ArtisanRepository $artisanRepository): Response
    {
        return $this->render('artisan/list_artisans.html.twig', [
            'artisans' => $artisanRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_artisan_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $artisan = new Artisan();
        $form = $this->createForm(Artisan1Type::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($artisan);
            $entityManager->flush();

            return $this->redirectToRoute('app_artisan_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('artisan/new.html.twig', [
            'artisan' => $artisan,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_artisan_show', methods: ['GET'])]
    public function show(Artisan $artisan): Response
    {

        return $this->render('artisan/show.html.twig', [
            'artisan' => $artisan,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_artisan_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Artisan $artisan, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Artisan1Type::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_product_artisan_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('artisan/edit.html.twig', [
            'artisan' => $artisan,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_artisan_delete', methods: ['POST'])]
    public function delete(SessionInterface $session,TokenStorageInterface$tokenStorage,Request $request, Artisan $artisan, ResetPasswordRequestRepository $resetPasswordRequest, EntityManagerInterface $entityManager): ?Response
    {

        if ($this->isCsrfTokenValid('delete' . $artisan->getId(), $request->request->get('_token'))) {



            $resetPasswordRequest->deleteResetByIdArtisan($artisan->getId());
            $tokenStorage->setToken(null);
            $session->invalidate();

            $entityManager->remove($artisan);


            $entityManager->flush();


        } else {
            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);

        }

        return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);



        //    {{ include('client/_delete_form.html.twig') }}
    }

    /**
     * @throws \Exception
     */
    #[Route('/artisan/products', name: 'app_product_artisan_index', methods: ['GET'])]
    public function showsProductByArtisan(ProductRepository $productRepository, TokenInterface $token): Response
    {

        $artisan = $token->getUser();


        if ($artisan instanceof Artisan) {
            dump($artisan->getRoles());

            return $this->render('artisan/list_artisans.html.twig', [
                'products' => $productRepository->findById($artisan->getId()),
            ]);
        }
        return throw new \Exception('Acces Denied.');
    }

    #[Route('artisan/product/{id}', name: 'app_product_delete', methods: ['POST'])]
    public function DeleteProduct(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $product->getId(), $request->request->get('_token'))) {
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/editpasswordArtisan', name: 'app_artisan_editpassword', methods: ['GET', 'POST'])]
    public function editPassword(Request $request, UserPasswordHasherInterface $userPasswordHasher, Artisan $artisan, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $artisan->setPassword(
                $userPasswordHasher->hashPassword(
                    $artisan,
                    $form->get('plainPassword')->getData()
                )
            );

            $artisan->setRoles(['ROLE_ARTISAN']);

            $entityManager->persist($artisan);
            $entityManager->flush();

            return $this->redirectToRoute('app_product_artisan_index', []);

        }
        return $this->render('artisan/editpassword.html.twig', [
            'form' => $form->createView(),
        ]);


    }


}

