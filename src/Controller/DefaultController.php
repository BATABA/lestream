<?php

// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\TranslatorInterface;

class DefaultController extends AbstractController
{
    /**
    * @Route("/")
    */
    public function indexAction(TranslatorInterface $translator)
    {
        return $this->render('base.html.twig');
    }
}
