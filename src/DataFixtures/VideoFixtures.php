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
    $video->setTitle("Symfony PHP");
    $video->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");
    $video->setDuration(65);
    $video->setPublishedAt(new DateTimeImmutable());
    $video->setVideoUrl("public/images/videos/pexels.mp4");
    $video->setSlug("symfony-php");
    $video->setImageName("");
    $video->addCategory($this->getReference(CategoryFixtures::PROGRAMMATION));
    $manager->persist($video);
    $manager->flush();

    $video = new Video();
    $video->setTitle("JavaScript");
    $video->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");
    $video->setDuration(65);
    $video->setPublishedAt(new DateTimeImmutable());
    $video->setVideoUrl("public/images/videos/pexels-bedr.mp4");
    $video->setSlug("java-script");
    $video->setImageName("");
    $video->addCategory($this->getReference(CategoryFixtures::PROGRAMMATION));
    $manager->persist($video);
    $manager->flush();
        $manager->flush();

    
    $video = new Video();
    $video->setTitle("Découvrir le Développement Web");
    $video->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");
    $video->setDuration(65);
    $video->setPublishedAt(new DateTimeImmutable());
    $video->setVideoUrl("public/images/videos/pexels-nino.mp4");
    $video->setSlug("decouvrir-le-developpement-web");
    $video->setImageName("");
    $video->addCategory($this->getReference(CategoryFixtures::DEVELOPPEMENT_WEB));
    $manager->persist($video);
    $manager->flush();
        $manager->flush();

        $video = new Video();
    $video->setTitle("Découvrir le Développement mobile");
    $video->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");
    $video->setDuration(65);
    $video->setPublishedAt(new DateTimeImmutable());
    $video->setVideoUrl("public/images/videos/pexels.mp4");
    $video->setSlug("decouvrir-le-developpement-mobile");
    $video->setImageName("");
    $video->addCategory($this->getReference(CategoryFixtures::DEVELOPPEMENT_MOBILE));
    $manager->persist($video);
    $manager->flush();
        $manager->flush();

    $video = new Video();
    $video->setTitle("Méthode de diagnostic");
    $video->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");
    $video->setDuration(65);
    $video->setPublishedAt(new DateTimeImmutable());
    $video->setVideoUrl("public/images/videos/pexels-bedr.mp4");
    $video->setSlug("methode-de_diagnostic");
    $video->setImageName("");
    $video->setImageName("");
    $video->addCategory($this->getReference(CategoryFixtures::MAINTENANCE_DES_DISPOSITIFS_ACTUELS));
    $manager->persist($video);
    $manager->flush();

    $video = new Video();
    $video->setTitle("SQL de A à Z ");
    $video->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");
    $video->setDuration(65);
    $video->setPublishedAt(new DateTimeImmutable());
    $video->setVideoUrl("public/images/videos/pexels-nino.mp4");
    $video->setSlug("sql-de-a-a-z");
    $video->setImageName("");
    $video->setImageName("");
    $video->addCategory($this->getReference(CategoryFixtures::BASES_DE_DONNEES));
    $manager->persist($video);
    $manager->flush();


    }
}