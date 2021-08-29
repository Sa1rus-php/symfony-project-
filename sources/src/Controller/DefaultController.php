<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Post;

/**
 * Class DefaultController
 * @package App\Controller
 *
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     *
     * @return Response
     */
    public function index(): Response
    {
        $find = $this->getDoctrine()->getManager();
        $posts = $find->getRepository(Post::class)->findAll();

        return $this->render('default/index.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @Route("/about", name="default_about")
     *
     * @return Response
     */
    public function about()
    {
        return $this->render('default/about.html.twig');
    }

    /**
     * @Route("/feedback", name="default_feedback")
     *
     * @return Response
     */
    public function feedback()
    {
        return $this->render('default/feedback.html.twig');
    }

    /**
     * @Route("/create", name="default_create")
     *
     * @return Response
     */
    public function createPost()
    {
        $post = new Post();
        $post->setName('New post - ' . rand(0, 100));
        $post->setDescription('My post description');
        $post->setPublishedAt(new \DateTime());

        $post2 = new Post();
        $post2->setName('New post - ' . rand(0, 100));
        $post2->setDescription('My post description');
        $post2->setPublishedAt(new \DateTime());

        $doc = $this->getDoctrine()->getManager();

        $post3 = $doc->getRepository(Post::class)->find(13);
        // DBAL

        $doc->persist($post);
        $doc->persist($post2);

        $doc->remove($post3);
        $doc->flush();

        echo "<pre>";
        dd($post);

        return new Response('OK');
    }
}
