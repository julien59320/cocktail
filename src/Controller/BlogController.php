<?php

namespace App\Controller;


use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BlogController extends AbstractController
{
    #[Route('/', name: 'Home')]
    public function index(PostRepository $ripo): Response
    {

        $posts = $ripo->findBy(array(), array('id' => 'desc'), 5, 0);

        return $this->render('blog/index.html.twig', [

            'post' => $posts,
        ]);
    }
    #[Route('/Aperitif', name: 'Aperitif')]
    public function Aperitif(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();
        // $posts = $ripo->findByAll(array(), array('id' => 'desc'), 5, 0);

        return $this->render('blog/Aperitif.html.twig', [

            'post' => $posts,
        ]);
    }
    #[Route('/Digestif', name: 'Digestif')]
    public function Digestif(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();
        // $posts = $ripo->findByAll(array(), array('id' => 'desc'), 5, 0);

        return $this->render('blog/Digestif.html.twig', [

            'post' => $posts,
        ]);
    }
    #[Route('/Stimulant', name: 'Stimulant')]
    public function Stimulant(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();

        return $this->render('blog/Stimulant.html.twig', [

            'post' => $posts,
        ]);
    }
    #[Route('/Rafraichissant', name: 'Rafraichissant')]
    public function Rafraichissant(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();

        return $this->render('blog/Rafraichissant.html.twig', [

            'post' => $posts,
        ]);
    }
    #[Route('/CocktailHiver', name: 'CocktailHiver')]
    public function CocktailHiver(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();

        return $this->render('blog/CocktailHiver.html.twig', [

            'post' => $posts,
        ]);
    }
    #[Route('/CocktailSansAlcool', name: 'CocktailSansAlcool')]
    public function CocktailSansAlcool(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();

        return $this->render('blog/CocktailSansAlcool.html.twig', [

            'post' => $posts,
        ]);
    }
    #[Route('/Contact', name: 'Contact')]
    public function Contact(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();

        return $this->render('blog/Contact.html.twig', [

            'post' => $posts,
        ]);
    }
    #[Route('/Show/{id}', name: 'Show')]
    public function Show(PostRepository $ripo, $id): Response
    {
        // $ripo = $this->getDoctrine()->getRepository(Post::class);
        $post = $ripo->find($id);


        // printf($id);

        return $this->render('blog/Show.html.twig', [
            'post' => $post,
            'id' => $id
        ]);
        // printf('$id');
    }
}
