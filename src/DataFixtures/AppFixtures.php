<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->setName('post' . $i);
            $post->setContent('content' . $i);
            $post->setTest('test' . $i);
            $manager->persist($post);
            $manager->flush();
        }
    }
}
