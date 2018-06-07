<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DieppeController extends Controller
{
    /**
     * @Route("/dieppe", name="dieppe")
     */
    public function index()
    {
        return $this->render('dieppe/index.html.twig', [
            'controller_name' => 'DieppeController',
        ]);
    }
}
