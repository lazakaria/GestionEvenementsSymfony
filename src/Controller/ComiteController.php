<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Comite;



class ComiteController extends AbstractController
{
    /**
     * @Route("/", name="default_index")

     */

    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Comite::class);
        $comites = $repo->findAll();

        return $this->render ('comite/index.html.twig' , [ 'comites'=>$comites ]);

    }
}
