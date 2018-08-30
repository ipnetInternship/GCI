<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    
	/**
     * @Route("/", name="home", methods="GET")
     */
    public function home($data = [])
    {
        return $this->render('pages/home.html.twig', $data);
    }

    /**
     * @Route("/login", name="login", methods="GET")
     */
    public function login()
    {
        return $this->render('pages/signup.html.twig');
    }
}