<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class UserController
 * @package App\Controller
 *
 */
class UserController
{
    /**
     * @Route("/user/register", name="user_register")
     *
     * @return Response
     */
    public function registerAction()
    {
        return new Response('registerAction');
    }

    /**
     * @Route("/user/forgot", name="user_forgot")
     *
     * @return Response
     */
    public function forgotPasswordAction()
    {
        return new Response('forgotPasswordAction');
    }

    /**
     * @Route("/user/profile", name="user_profile")
     *
     * @return Response
     */
    public function profileAction()
    {
        return new Response('profileAction');
    }
}
