<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/comment/{slug}', name: 'comment_show')]
    public function show(): Response
    {
        return $this->render('comment/show.html.twig', [
            'controller_name' => 'CommentController',
        ]);
    }
}
