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
            'title1' => "Nos derniers cocktails",
            'title2' => "Qui sommes nous",
            'title3' => "Les plus consultés",
            'title4' => "Nos cocktails",
            'aboutTitle' => "What is Lorem Ipsum?",
            'aboutContent' => " Ipsum is Loremsimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type spimen book
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'btnPost' => "Lire la suite",
            'newsTitle' => "Ne manquer plus aucune recette",
            'newsBtn' => "Envoyer",
            'catNav1' => "Apéritif",
            'catNav2' => "Digestif",
            'catNav3' => "Stimulant",
            'catNav4' => "Rafraichissant",
            'catNav5' => "Cocktail d'hiver",
            'catNav6' => "Cocktail sans alcool",
            'contact' => "Contact",
            'home' => "Accueil",
            'partageTitle' => "Partager nous vos recettes",
        ]);
    }
    #[Route('/Aperitif', name: 'Aperitif')]
    public function Aperitif(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();
        // $posts = $ripo->findByAll(array(), array('id' => 'desc'), 5, 0);

        return $this->render('blog/Aperitif.html.twig', [

            'post' => $posts,
            'title' => 'Nos Apéritifs',
            'btn' => 'voir',
            'catNav1' => "Apéritif",
            'catNav2' => "Digestif",
            'catNav3' => "Stimulant",
            'catNav4' => "Rafraichissant",
            'catNav5' => "Cocktail d'hiver",
            'catNav6' => "Cocktail sans alcool",
            'contact' => "Contact",
            'home' => "Accueil",
        ]);
    }
    #[Route('/Digestif', name: 'Digestif')]
    public function Digestif(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();
        // $posts = $ripo->findByAll(array(), array('id' => 'desc'), 5, 0);

        return $this->render('blog/Digestif.html.twig', [
            'post' => $posts,
            'title' => 'Nos Digestifs',
            'btn' => 'voir',
            'catNav1' => "Apéritif",
            'catNav2' => "Digestif",
            'catNav3' => "Stimulant",
            'catNav4' => "Rafraichissant",
            'catNav5' => "Cocktail d'hiver",
            'catNav6' => "Cocktail sans alcool",
            'contact' => "Contact",
            'home' => "Accueil",
        ]);
    }
    #[Route('/Stimulant', name: 'Stimulant')]
    public function Stimulant(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();

        return $this->render('blog/Stimulant.html.twig', [

            'post' => $posts,
            'title' => 'Nos Cocktails Stimulants',
            'btn' => 'voir',
            'catNav1' => "Apéritif",
            'catNav2' => "Digestif",
            'catNav3' => "Stimulant",
            'catNav4' => "Rafraichissant",
            'catNav5' => "Cocktail d'hiver",
            'catNav6' => "Cocktail sans alcool",
            'contact' => "Contact",
            'home' => "Accueil",
        ]);
    }
    #[Route('/Rafraichissant', name: 'Rafraichissant')]
    public function Rafraichissant(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();

        return $this->render('blog/Rafraichissant.html.twig', [

            'post' => $posts,
            'title' => 'Nos Cocktails Rafraichissants',
            'btn' => 'voir',
            'catNav1' => "Apéritif",
            'catNav2' => "Digestif",
            'catNav3' => "Stimulant",
            'catNav4' => "Rafraichissant",
            'catNav5' => "Cocktail d'hiver",
            'catNav6' => "Cocktail sans alcool",
            'contact' => "Contact",
            'home' => "Accueil",
        ]);
    }
    #[Route('/CocktailHiver', name: 'CocktailHiver')]
    public function CocktailHiver(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();

        return $this->render('blog/CocktailHiver.html.twig', [

            'post' => $posts,
            'title' => "Nos Cocktails d'hiver",
            'btn' => 'voir',
            'catNav1' => "Apéritif",
            'catNav2' => "Digestif",
            'catNav3' => "Stimulant",
            'catNav4' => "Rafraichissant",
            'catNav5' => "Cocktail d'hiver",
            'catNav6' => "Cocktail sans alcool",
            'contact' => "Contact",
            'home' => "Accueil",
        ]);
    }
    #[Route('/CocktailSansAlcool', name: 'CocktailSansAlcool')]
    public function CocktailSansAlcool(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();

        return $this->render('blog/CocktailSansAlcool.html.twig', [


            'post' => $posts,
            'title' => 'Nos Cocktails Sans Alcool',
            'btn' => 'voir',
            'catNav1' => "Apéritif",
            'catNav2' => "Digestif",
            'catNav3' => "Stimulant",
            'catNav4' => "Rafraichissant",
            'catNav5' => "Cocktail d'hiver",
            'catNav6' => "Cocktail sans alcool",
            'contact' => "Contact",
            'home' => "Accueil",
        ]);
    }
    #[Route('/Contact', name: 'Contact')]
    public function Contact(PostRepository $ripo): Response
    {
        $posts = $ripo->findAll();

        return $this->render('blog/Contact.html.twig', [


            'post' => $posts,
            'title' => 'Contact',
            'catNav1' => "Apéritif",
            'catNav2' => "Digestif",
            'catNav3' => "Stimulant",
            'catNav4' => "Rafraichissant",
            'catNav5' => "Cocktail d'hiver",
            'catNav6' => "Cocktail sans alcool",
            'contact' => "Contact",
            'home' => "Accueil",
        ]);
    }
    #[Route('/Show-{id}', name: 'Show')]

    public function Show(Post $post): Response
    {
        // $em = $this->getDoctrine()->getManager();
        // $em->remove($post);
        // $em->flush();
        // $ripo->findAll($id);



        return $this->render('blog/Show.html.twig', [
            'post' => $post,
        ]);
    }
}
