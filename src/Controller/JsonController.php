<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JsonController extends AbstractController
{
    public function index(): Response
    {
    $file = '/Applications/MAMP/htdocs/interview_assessment/data.json';
    $content = file_get_contents($file);        
    $data = json_decode($content, true);

        return $this->render('json/index.html.twig', [
            'jsonData' => $data,
        ]);
    }
}
