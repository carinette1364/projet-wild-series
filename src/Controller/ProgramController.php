<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProgramRepository;

#[Route('/program', name: 'program_')]


class ProgramController extends AbstractController
{
      /**
     * @Route("/program/", name="program_index")
     */
    #[Route('/', name: 'index')]
    public function index(ProgramRepository $programRepository): Response
    {
        // return new Response(
        //     '<html><body>Wild Series Index</body></html>'
        // );
        $programs = $programRepository->findAll();
        return $this->render(
            'program/index.html.twig', 
            ['programs' => $programs]);
    }

    // #[Route('/{id}', methods:['GET'], requirements: ['id' => '\d+'], name: 'show')]
    // public function show(int $id=4): Response
    // {
    //     return $this->render('program/show.html.twig', [
    //         'id' => $id,
    //      ]);
    // }

    #[Route('/show/{id}', requirements: ['id' => '\d+'], methods:['GET'], name: 'show')]
    public function show(int $id, ProgramRepository $programRepository): Response
    {
        $program = $programRepository->findOneBy(['id' => $id]);

        if (!$program) {
            throw $this->createNotFoundException(
                'No program with id ' . $id . 'found in program\'s table'
            );
        }
        return $this->render('program/show.html.twig', [
            'program' => $program,
         ]);
    }

}