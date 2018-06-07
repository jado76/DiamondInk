<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcceuilController extends Controller
{
    /**
     * @Route("/acceuil", name="acceuil")
     */
    public function index()
    {
        return $this->render('acceuil/index.html.twig', [
            'controller_name' => 'AcceuilController',
        ]);
    }
}
