<?php

namespace App\Controller\BO;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SettingsController extends AbstractController
{
    /**
     * @Route("/settings", name="settings_index", methods="GET")
     */
    public function index()
    {
        return $this->render('/settings/list.html.twig');
    }
}
