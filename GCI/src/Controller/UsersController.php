<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Users;

class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     */
    public function index()
    {
        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }

    /**
     * @Route("/login-action", name="post_login", methods="POST")
     */
    public function postLogin(){
    	$request = Request::createFromGlobals();

    	$mail = $request->request->get('mail', "");

    	$password = $request->request->get('password', "");

    	$user = $this->getDoctrine()
    		->getRepository(Users::class)
    		->findUserByMail($mail);

    	if (!$user){
    		throw $this->createNotFoundException(
            'No product found for id '.$id
        	);
        }

        $statut = "0";

        if ($user->getPassword() === $password){
        	$statut = "1";
        }

        return $this->redirect($this->generateUrl('home', array('statut' => $statut)));
    }
}
