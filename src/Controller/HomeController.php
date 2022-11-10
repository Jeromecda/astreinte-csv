<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/check_form', name: 'check_form')]
    public function checkForm(Request $request): Response
    {
        $requete = $request->attributes->all();
        dd($requete);

        $builder->add('field', ChoiceType::class, array(
            'label' => false,
            'choices' => self::columnsort(),
            'attr' => array(
                'placeholder' => 'Field',
            ),
        ));

        return $this->render('home/check_form.html.twig', [
            'requete' => $requete,
        ]);
    }
    // #[Route('/home', name: 'app_home')]
    // public function index(): JsonResponse
    // {
    //     return $this->json([
    //         'message' => 'Test',
            
    //         'path' => 'src/Controller/HomeController.php',
    //     ]);
    // }
}
