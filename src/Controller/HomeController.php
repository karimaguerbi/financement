<?php

namespace App\Controller;



use App\Repository\ExpensesRepository;
use App\Repository\IncomeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
   
  

     /**
     * @Route("/", name="home")
     */

    public function index(IncomeRepository $icomeRepository,ExpensesRepository $expenseRepository)
    {$somme =  $expenseRepository->getSumExpense();
         $total =  $icomeRepository->getSumIncome();
               return $this->render('home/index.html.twig', [
                'somme'=>$somme,'total'=>$total
        ]);
    }
}
