<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrameworkController extends AbstractController
{
    /**
     * @Route("/framework", name="framework")
     */
    public function index()
    {
        return $this->render('framework/index.html.twig', [
            'controller_name' => 'FrameworkController',
        ]);
    }
}
