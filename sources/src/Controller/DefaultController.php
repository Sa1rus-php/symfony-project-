<?php
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class DefaultController{
    /**
     * @Route("/", name="def")
     */
    public function index(){
        return new Response(
            '<h1>Hello world</h1>'
        );
    }
}