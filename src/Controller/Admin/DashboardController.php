<?php

// src/Controller/Admin/DashboardController.php
namespace App\Controller\Admin;

use App\Repository\StreamerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\TranslatorInterface;

class DashboardController extends AbstractController
{
    /**
    * @Route("/admin/dashboard", name="app_admin_dashboard")
    */
    public function index(StreamerRepository $streamers, TranslatorInterface $translator)
    {
        $list_streamer = $streamers->findAll();
        var_dump($list_streamer);

        return $this->render('base.html.twig');
    }
}
