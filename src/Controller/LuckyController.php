<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //To use html template

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; //To add route directly in controller

class LuckyController extends AbstractController
{
    /**
      * @Route("/lucky/number")
      */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}
