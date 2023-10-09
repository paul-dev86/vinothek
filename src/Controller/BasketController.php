<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BasketController extends AbstractController
{

    public function index(): Response
    {
        return $this->render('basket/index.html.twig', [
            'controller_name' => 'BasketController',
        ]);
    }

    //TODO create basket entity


    private function discounts(): array
    {
        //TODO calculate discount for basket

        return [
            35 => 2.5,
            50 => 5,
            75 => 10,
            100 => 12.5,
            125 => 15
        ];
    }
}
