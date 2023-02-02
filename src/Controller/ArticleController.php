<?php

namespace App\Controller;

use App\Services\AddedArticleAppleServices;
use App\Services\AddedArticleService;
use App\Services\AddedArticleTeslaServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    #[Route('/article', name: 'article')]
    public function index(AddedArticleService $AddedArticleService): Response
    {
        $articles = $AddedArticleService->generalArticle("2f11819de4e64c5fbea67a325d5a906b", "general");
        return $this->render('article/generalArticle.html.twig', [
            'articles' => $articles,
        ]);

    }

    #[Route('/apple', name: 'article')]
    public function apple(AddedArticleAppleServices $addedArticleAppleServices) {
        $articles = $addedArticleAppleServices->appleArticle("2f11819de4e64c5fbea67a325d5a906b");
        return $this->render('article/appleArticle.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/tesla', name: 'article')]
    public function tesla(AddedArticleTeslaServices $addedArticleTeslaServices) {
        $articles = $addedArticleTeslaServices->teslaArticle("2f11819de4e64c5fbea67a325d5a906b");
        return $this->render('article/appleArticle.html.twig', [
            'articles' => $articles,
        ]);
    }
}
