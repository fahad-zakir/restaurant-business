<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JsonController extends AbstractController
{
    /**
     * @Route("/json", name="json")
     */
    public function index(): Response
    {
    $file = '/Applications/MAMP/htdocs/test-symfony/data.json';
    $content = file_get_contents($file);        
    $data = json_decode($content, true);

        return $this->render('json/index.html.twig', [
            'jsonData' => $data,
        ]);
    }
}
