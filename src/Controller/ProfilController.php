<?php

namespace App\Controller;

use App\Form\UserType;
use App\Repository\VideoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $encoder): Response
    {   //On récupere l'utilisateur
        

        $user = $this->getUser();
        //On crée un formoulaire avec des données de l'utilisateur
        $form = $this->createForm(UserType::class, $user);
        //
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //On vérifie si l'utilisateur à changé de mot de pass
            if(!is_null($request->request->get('plainPassword'))){
                // On encode le nouveau password et on l'affecte au user
                $password = $encoder->hashPassword($user, $request->request->get('plainPassword'));
                $user->setPassword($password);

            }
            //On met en place un message flash
            $this->addFlash('success', 'Votre profil a bien été modifié');
            // On enregistre les modification
            $em->persist($user);
            $em->flush();
            //On redirige vers la home
            return $this->redirectToRoute('app_home');


        }
        return $this->render('profil/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/add-favori/{id}', name: 'add_favori')]
    public function addFavori($id, VideoRepository $videoRepository, EntityManagerInterface $em):Response
    {
        //On récupère le video dans la BDD
        $video = $videoRepository->find($id);
        //On récupère l'utilisateur
        $user = $this->getUser();
        //On ajoute le video à la liste des favoris de l'utilisateur
        $user->addVideo($video);
        //On met en place un message flash
        $this->addFlash('success', 'Le video a bien été ajouté  à vos favories');
        $em->persist($user);
        $em->flush();
        //On regdirige vers la page de videos
        return $this->redirectToRoute('app_video');

    }

    #[Route('/remove-video/{id}', name: 'remove_video')]
    public function removeVideo($id, VideoRepository $videoRepository, EntityManagerInterface $em):Response
    {
        //On récupère le video dans la BDD
        $video = $videoRepository->find($id);
        //On récupère l'utilisateur
        $user = $this->getUser();
        //On ajoute le video à la liste des favoris de l'utilisateur
        $user->removeVideo($video);
        //On met en place un message flash
        $this->addFlash('success', 'Le video a bien été retirer à vos favoris');
        $em->persist($user);
        $em->flush();
        //On regdirige vers la page de videos
        return $this->redirectToRoute('app_profil');

    }

    
}

