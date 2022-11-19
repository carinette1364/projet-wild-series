<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;

#[Route('/category', name: 'category_')]


class CategoryController extends AbstractController
{
      /**
     * @Route("/program/", name="program_index")
     */
    #[Route('/', name: 'index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        // return new Response(
        //     '<html><body>Wild Series Index</body></html>'
        // );
        $categories = $categoryRepository->findAll();
        return $this->render(
            'category/index.html.twig', 
            ['categories' => $categories]
        );
    }

    #[Route('/{name}', name: 'show')]
    public function show(string $name, CategoryRepository $categoryRepository, ProgramRepository $programRepository): Response
    {
        $category = $categoryRepository->findBy(['name' => $name]);
        $programs = $programRepository->findBy(['category' => $category]);
        return ($programs)
        ? $this->render('category/show.html.twig', ['category' => $category, 'programs' => $programs])
        : $this->redirectToRoute('notFound_index');
        // if (!$category) {
        //     throw $this->createNotFoundException(
        //         'No category with id ' . $name . 'found in categories table'
        //     );
        // }
        // return $this->render('category/show.html.twig', [
        //     'category' => $name,
        //     'programs' => $programs
        //  ]);
    }

}
