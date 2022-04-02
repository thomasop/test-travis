<?php declare(strict_types=1);

namespace App\Tests\Entity;

use App\Entity\Comment;
use App\Entity\Post;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class PostTest extends TestCase
{
    public function testContent(): void
    {
        $post = new Post();
        $post->setContent('content');
        $this->assertEquals("content", $post->getContent());
    }

    public function testName()
    {
        $post = new Post();
        $post->setName('name');
        $this->assertEquals("name", $post->getName());
    }

    public function testTest()
    {
        $post = new Post();
        $post->setTest('test');
        $this->assertEquals("test", $post->getTest());
    }
}