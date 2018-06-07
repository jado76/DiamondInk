<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MentionLegaleController extends Controller
{
    /**
     * @Route("/mention/legale", name="mention_legale")
     */
    public function index()
    {
        return $this->render('mention_legale/index.html.twig', [
            'controller_name' => 'MentionLegaleController',
        ]);
    }
}
