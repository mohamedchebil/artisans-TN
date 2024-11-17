<?php

namespace App\Controller;

use App\Entity\Artisan;
use http\Client\Curl\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test',methods: ['GET'])]
    public function index(TokenInterface $token,Security $security ): Response
    {

        $user2 = $token->getUser();


        $user = $security->getUser();
        $useer=$this->getUser();


        if ( $user instanceof Artisan)




        return $this->render('FrontOffice/index.html.twig', [ 'user'=>$user2,'user2'=>$useer,
            'controller_name' => 'TestController'
        ]);

    }
}
