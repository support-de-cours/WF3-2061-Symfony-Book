<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/author', name: 'author:')]
class AuthorController extends AbstractController
{
    #[Route('s', name: 'index')]
    public function index(): Response
    {
        return $this->render('pages/author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route('', name: 'create')]
    public function create(): Response
    {
        return $this->render('xxxx');
    }

    #[Route('/{id}', name: 'read')]
    public function read(): Response
    {
        return $this->render('xxxx');
    }

    #[Route('/{id}/edit', name: 'update')]
    public function update(): Response
    {
        return $this->render('xxxx');
    }

    #[Route('/{id}/delete', name: 'delete')]
    public function delete(): Response
    {
        return $this->render('xxxx');
    }
}
