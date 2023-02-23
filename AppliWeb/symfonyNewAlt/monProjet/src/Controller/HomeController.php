<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 * @method render(string $string, array $array)
 */
class HomeController extends AbstractController
{

    /**
     * @Route("/", name="accueil")
     */
    public function index():Response
    {
        return $this->render('accueil/index.html.twig');
    }

}