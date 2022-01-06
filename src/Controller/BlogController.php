<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    #[Route('/', name: 'blog')]
    public function index(PostRepository $ripo): Response
    {

        $posts = $ripo->findBy(array(), array('id' => 'desc'), 5, 0);

        return $this->render('blog/index.html.twig', [

            'post' => $posts,
        ]);
    }
}
