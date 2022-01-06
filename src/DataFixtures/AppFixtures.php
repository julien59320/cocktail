<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $post = new Post();
            $post->setTitle("Titre de l'article n° $i")
                ->setImage("https://127.0.0.1:8000/upload/img1.jpeg")
                ->setContent("<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>")
                // ->setCategory("<h3> Cocktail avec alcool</h3>")
                ->setCreatedAt(new \DateTime());
            $manager->persist($post);
        }
        $manager->flush();
    }
}
