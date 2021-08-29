<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky-oooops", name="lucky_test")
     *
     * @return Response
     */
    public function test(): Response
    {
        return $this->render('lucky/test.html.twig');
    }

    /**
     * @Route("/lucky", name="lucky_index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('lucky/index.html.twig');
    }
}
