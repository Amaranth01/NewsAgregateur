<?php

namespace App\Services;

use jcobhams\NewsApi\NewsApi;

class AddedArticleTeslaServices
{
    public function teslaArticle($apikey)
    {
        $newsApi = new NewsApi($apikey);
        return $newsApi->getTopHeadLines('tesla');
    }
}