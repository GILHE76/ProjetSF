<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TotoController extends Controller
{
    /**
     * @Route("/toto", name="toto")
     */
    public function index()
    {
        return $this->render('toto/index.html.twig', [
            'controller_name' => 'TotoController',
        ]);
    }
}
