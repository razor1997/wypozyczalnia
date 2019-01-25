<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
* @Route("/home", name="home")
*/
    public function index()
    {
        $plik = file('dane/planety.txt');
        $tab = array();
        foreach($plik as $p)
        {
        $exp = explode(';',trim($p));
        $tab[] = array(
        'planeta' => $exp[0],
        'plik' => $exp[1],
        'srednica'=> $exp[2],
        'masa' => $exp[3],
        'odleglosc' => $exp[4],
        'czas_obiegu' => $exp[5],
        'okres_obrotu' => $exp[6],
        'ksiezyce' => $exp[7],
        'rodzaj' => $exp[8]
        );
        }
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'dane' => $tab
        ]);
    }
/**
* @Route("/symfony", name="symfony")
*/
public function symfony()
{
return $this->render('framework/symfony.html.twig', [
'controller_name' => 'FrameworkController',
]);
}

/**
* @Route("/laravel", name="laravel")
*/
public function laravel()
{
return $this->render('framework/laravel.html.twig', [
'controller_name' => 'FrameworkController',
]);
}

/**
* @Route("/phalcon", name="phalcon")
*/
public function phalcon()
{
return $this->render('framework/phalcon.html.twig', [
'controller_name' => 'FrameworkController',
]);
}

}
