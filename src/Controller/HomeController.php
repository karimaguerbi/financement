<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Income;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $income = new Income();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController','income' => $income,
        ]);
    }
}
