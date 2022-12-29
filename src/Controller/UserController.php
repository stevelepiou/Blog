<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        

        return $this->render('user/index.html.twig', [
            'user' => $user,
            
        ]);
    }     
    
    // #[Route('/user', name: 'app_user')]
    // public function index(User $user): Response
    // {


    //     return $this->render('user/index.html.twig', [
    //         'controller_name' => 'UserController',
    //     ]);
    // }

    
    // #[Route('/profil', name: 'app_profil')]
    // public function showProfil(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    // {
    //     return $this->render('user/index.html.twig');
    // }
}
