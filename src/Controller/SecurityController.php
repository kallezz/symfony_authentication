<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $req, AuthenticationUtils $utils)
    {
        $err = $utils->getLastAuthenticationError();
        $lastUser = $utils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'error' => $err,
            'last_username' => $lastUser
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {

    }

    /**
     * @Route("/", name="page_home")
     */
    public function homePage()
    {
        return $this->render('home.html.twig');
    }
}
