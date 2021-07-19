<?php
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class LuckyController
{
    /**
     * @Route("/lucky/number", name="lucky_number")
     */
    public function number()
    {
        $number = random_int(0, 100);
        return new Response(
            '<h1>Lucky num: '.$number.'</h1>'
        );

    }
}