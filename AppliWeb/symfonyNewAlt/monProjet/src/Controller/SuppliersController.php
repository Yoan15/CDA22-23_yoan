<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuppliersController extends AbstractController
{
    /**
     * @Route("/suppliers", name="app_suppliers")
     */
    public function index(): Response
    {
        return $this->render('suppliers/index.html.twig', [
            'controller_name' => 'SuppliersController',
        ]);
    }
}
