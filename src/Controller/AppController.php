<?php

namespace App\Controller;

use App\Factory\EntityFactory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * @Route("/", name="home_index")
     */
    public function index(EntityFactory $entityFactory): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        return $this->render('base.html.twig', array(
            'user' => $user
        ));
    }
}
