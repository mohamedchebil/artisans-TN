<?php

namespace App\Controller;

use App\Entity\Artisan;
use App\Entity\Client;
use App\Entity\User;
use App\Form\RegistrationArtisanFormType;
use App\Form\RegistrationClientType;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use App\Security\UserAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;

class RegistrationController extends AbstractController
{

    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/registerclient', name: 'app_register_client')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $client = new Client();
        $form = $this->createForm(RegistrationClientType::class, $client);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $client->setPassword(
                $userPasswordHasher->hashPassword(
                    $client,
                    $form->get('plainPassword')->getData()
                )
            );
            $client->setRoles(['ROLE_CLIENT']);

            $entityManager->persist($client);
            $entityManager->flush();

            $this->emailVerifier->sendEmailConfirmation('app_verify_emailArtisan', $client,
                (new TemplatedEmail() )
                    ->from(new Address('oubied.357@gmail.com', 'Artisanant'))
                    ->to($client->getEmail())
                    ->subject('Please Confirm your Email TAWAAA ')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );


            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $client,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }


    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/registerartisan', name: 'app_register_artisan')]
    public function registerartisan(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $artisan = new Artisan();
        $form = $this->createForm(RegistrationArtisanFormType::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $artisan->setPassword(
                $userPasswordHasher->hashPassword(
                    $artisan,
                    $form->get('plainPassword')->getData()
                )
            );
            $artisan->setEtatCompte(true);

            $artisan->setRoles(['ROLE_ARTISAN']);
            $entityManager->persist($artisan);
            $entityManager->flush();



            $this->emailVerifier->sendEmailConfirmation('app_verify_emailArtisan', $artisan,
                (new TemplatedEmail() )
                    ->from(new Address('oubied.357@gmail.com', 'Artisanant'))
                    ->to($artisan->getEmail())
                    ->subject('Please Confirm your Email to Sign up ')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );

            // do anything else you need here, like send an email

            /*return $userAuthenticator->authenticateUser(
                $artisan,
                $authenticator,
                $request

            );*/

                return $this->redirectToRoute("app_login");
        }
        return $this->render('registration/registerArtisan.html.twig', [
            'registrationArtisanForm' => $form->createView(),
        ]);

    }

    #[Route('/verify/emailArtisan', name: 'app_verify_emailArtisan')]
    public function verifyUserEmailArtisan(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');


        $x = $this->getUser();


        // validate email confirmation link, sets User::isVerified=true and persists
        try {

            $x = $this->getUser();


            if ($x instanceof Artisan ) {


                $this->emailVerifier->handleEmailConfirmation($request, $x);
            }
            elseif ($x instanceof Client){
                $this->emailVerifier->handleEmailConfirmation($request, $x);
            }

        } catch (VerifyEmailExceptionInterface $exception) {


            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_login');
        }
        {
            // @TODO Change the redirect on success and handle or remove the flash message in your templates
            $this->addFlash('success', 'Your email address has been verified.');

            return $this->redirectToRoute('app_test');
        }
    }









}