<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/book', name: 'book:')]
class BookController extends AbstractController
{
    #[Route('s', name: 'index', methods: ['HEAD','GET'])]
    public function index(): Response
    {
        return $this->render('pages/book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }

    #[Route('', name: 'create', methods: ['HEAD','GET','POST'])]
    public function create(): Response
    {
        return $this->render('pages/book/create.html.twig');
    }

    #[Route('/{id}', name: 'read', methods: ['HEAD','GET'])]
    public function read(): Response
    {
        return $this->render('pages/book/read.html.twig');
    }

    #[Route('/{id}/edit', name: 'update', methods: ['HEAD','GET','POST'])]
    public function update(): Response
    {
        return $this->render('pages/book/update.html.twig');
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['HEAD','GET','DELETE'])]
    public function delete(): Response
    {
        return $this->render('pages/book/delete.html.twig');
    }
}
