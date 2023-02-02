<?php

namespace App\Services;

use jcobhams\NewsApi\NewsApi;

class AddedArticleService
{
    public function generalArticle($apikey,$category )
    {
       $newsApi = new NewsApi($apikey);
        return $newsApi->getTopHeadLines($category);
    }
}