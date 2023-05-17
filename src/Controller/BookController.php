<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/book', name: 'book:')]
class BookController extends AbstractController
{
    #[Route('s', name: 'index', methods: ['HEAD','GET'])]
    public function index(): Response
    {
        $books =  [];

        return $this->render('pages/book/index.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route('', name: 'create', methods: ['HEAD','GET','POST'])]
    public function create(Request $request, BookRepository $bookRepository): Response
    {
        // Création d'une nouvelle entité
        $book = new Book;

        dump($book);
        // Création du formulaire
        $form = $this->createForm(BookType::class, $book);

        // Attrapa et test la methode de requete (GET ou POST)
        $form->handleRequest($request);


        // Controlle du formulaire
        if ($form->isSubmitted() && $form->isValid())
        {
            $bookRepository->save($book, true);
            dd($book);
        }

        $form = $form->createView();

        return $this->render('pages/book/create.html.twig', [
            'form' => $form
        ]);
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
