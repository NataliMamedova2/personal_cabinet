<?php

namespace App\Controller\BO;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category_index", methods="GET")
     */
    public function index()
    {
        return $this->render('/category/list.html.twig');
    }
}
