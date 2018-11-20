<?php

namespace App\Controller\BO;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="dashboard_index", methods="GET")
     */
    public function index()
    {
        return $this->render('/dashboard/list.html.twig');
    }
}
