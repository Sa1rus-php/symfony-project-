<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController{
    /**
     * @Route("/", name="def")
     */
    public function index(){
        return $this->render('index.html.twig');
    }
}