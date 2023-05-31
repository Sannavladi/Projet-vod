<?php

namespace App\DataFixtures;


use DateTime;
use App\Entity\Video;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class VideoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $video = new Video();
    $video->setTitle("Boule et Bill");
    $video->setDescription("Boule et Bill est une série de bande dessinée");
    $video->setDuration(65);
    $video->setPublishedAt(DateTimeImmutable::createFromFormat('d-m-Y hh:mm', '25-12-2001 20:30'));
    $video->setVideoUrl("https://example.com/video.mp4");
    $video->setSlug("boule-bill");
    $video->addCategory($this->getReference(CategoryFixtures::PROGRAMMATION));
    $manager->persist($video);
    $manager->flush();


    $video = new Video();
    $video->setTitle("Boule et Bill");
    $video->setDescription("Boule et Bill est une série de bande dessinée");
    $video->setDuration(65);
    $video->setPublishedAt(DateTimeImmutable::createFromFormat('d-m-Y hh:mm', '25-12-2001 20:30'));
    $video->setVideoUrl("https://example.com/video.mp4");
    $video->setSlug("boule-bill");
    $video->addCategory($this->getReference(CategoryFixtures::PROGRAMMATION));
    $manager->persist($video);
    $manager->flush();


        $manager->flush();
    }
}
