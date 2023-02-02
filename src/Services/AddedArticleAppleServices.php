<?php

namespace App\Services;

use jcobhams\NewsApi\NewsApi;

class AddedArticleAppleServices
{
    public function appleArticle($apikey)
    {
        $newsApi = new NewsApi($apikey);
        return $newsApi->getTopHeadLines('apple');
    }
}