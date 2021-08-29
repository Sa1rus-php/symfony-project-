<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post/create", name="post_create")
     */
    public function create(Request $request)
    {
        $post = new Post();
        $post->setName('New post');
        $post->setPublishedAt(new \DateTime());

        $postForm = $this->createForm(PostForm::class, $post);

        $postForm->handleRequest($request);
        if ($postForm->isSubmitted() && $postForm->isValid()) {
            $doc = $this->getDoctrine()->getManager();

            $doc->persist($post);
            $doc->flush();

            return $this->redirectToRoute('post_show', [
                'post' => $post->getId(),
            ]);
        }

        return $this->render('post/create.html.twig', [
            'post' => $post,
            'postForm' => $postForm->createView(),
        ]);
    }

    /**
     * @Route("/post/edit/{post}", name="post_edit")
     */
    public function edit(Post $post, Request $request)
    {
//        $id = 0;
//        if (array_key_exists('id', $_GET)) {
//            $id = $_GET['id'];
//        }
//
//        if ($request->query->has('id')) {
//
//        }
//
//        $id = $request->get('id', 0);
//
//        dump($request);

        $doc = $this->getDoctrine()->getManager();
        //$post = $em->getRepository(Post::class)->find($request->get('id'));
        //$post = $em->getRepository(Post::class)->find($postId);

        $postForm = $this->createForm(PostForm::class, $post);

        $postForm->handleRequest($request);
        if ($postForm->isSubmitted() && $postForm->isValid()) {

            $record = $postForm->getData();
            $doc->persist($record);
            $doc->flush();

            return $this->redirectToRoute('post_show', [
                'post' => $post->getId(),
            ]);
        }

        return $this->render('post/edit.html.twig', [
            'post' => $post,
            'postForm' => $postForm->createView(),
        ]);
    }

    /**
     * @Route("/post/show/{post}", name="post_show")
     *
     * @return Response
     */
    public function getPost(Post $post)
    {

        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }
}
