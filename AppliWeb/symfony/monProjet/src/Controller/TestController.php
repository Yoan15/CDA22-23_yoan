<?php

namespace App\Controller;

use App\Entity\Products;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(ManagerRegistry $doctrine)
    {
        $repo = $doctrine->getRepository(Products::class);
        $obj = $repo->findAll();
        $obj[0]->getSuppliers()->getName();

        return $this->render('test/index.html.twig', [
            'obj' => $obj
        ]);
    }
}
