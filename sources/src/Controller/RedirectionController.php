<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RedirectionController extends AbstractController{
    /**
     * @Route("/about", name="about")
     */
    public function about(){
        return $this->render('about.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(){
        return $this->render('contact.html.twig');
    }
}

