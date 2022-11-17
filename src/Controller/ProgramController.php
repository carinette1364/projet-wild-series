<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/program', name: 'program_')]


class ProgramController extends AbstractController
{
      /**
     * @Route("/program/", name="program_index")
     */
    #[Route('/', name: 'index')]

    public function index(): Response
    {
        // return new Response(
        //     '<html><body>Wild Series Index</body></html>'
        // );
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Series',
         ]);
    }

    #[Route('/{id}', methods:['GET'], requirements: ['id' => '\d+'], name: 'show')]
    public function show(int $id=4): Response
    {
        return $this->render('program/show.html.twig', [
            'id' => $id,
         ]);
    }

}