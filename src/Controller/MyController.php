<?php

 namespace App\Controller;

 use symfony\Component\HttpFoundation\Response;

 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class MyController extends AbstractController
{
    /**
     * @Route("/my", name="my")

     */
    public function index()
    {
        return $this->render ('my/index.html.twig');

    }
     }
