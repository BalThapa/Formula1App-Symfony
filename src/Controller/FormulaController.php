<?php

namespace App\Controller;

use App\Service\ServiceFormula1;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaController extends AbstractController
{
    #[Route('/', name: 'app_formula', methods:['GET'])]
    public function index(ServiceFormula1 $ServiceFormula1): Response
    {
        return $this->render('Formula1/index.html.twig',[
            'data'=> $ServiceFormula1 ->findRaces2023()
        ]
        );
    }
}
