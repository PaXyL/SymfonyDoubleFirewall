<?php

namespace App\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * @Route("/admin", name="admin_index")
     */
    public function index(): Response
    {
        $keyapi = $this->getParameter('app.keyApi');
        var_dump($keyapi);

        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user = $this->getUser();

        return $this->render('base.html.twig', array(
            'user' => $user
        ));
    }
}
