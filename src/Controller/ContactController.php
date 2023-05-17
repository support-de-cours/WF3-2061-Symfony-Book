<?php 
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    #[Route('/contact', name: "app_contact")]
    public function maMethode(): Response
    {
        return $this->render("pages/contact/index.html.twig");
    }
}