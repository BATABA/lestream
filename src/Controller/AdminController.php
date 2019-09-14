<?php

// src/Controller/AdminController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\TranslatorInterface;

class AdminController extends AbstractController
{
    /**
    * @Route("/administration", name="administration")
    */
    public function indexAction(TranslatorInterface $translator)
    {
        $session = new Session();

        if (empty($session->get('id_administrator'))) {
            return $this->redirectToRoute('administration_login');
            exit();
        }

        return $this->render('base.html.twig');
    }

    /**
    * @Route("/administration/connexion", name="administration_login")
    */
    public function loginAction(TranslatorInterface $translator)
    {
        return $this->render('base.html.twig');
    }
}
