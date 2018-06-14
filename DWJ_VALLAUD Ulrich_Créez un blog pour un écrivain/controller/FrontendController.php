<?php

require_once('dao/ArticleDao.php');

class FrontendController
{
    private $articleDao;

    public function __construct()
    {
        $this->articleDao = new ArticleDao();
    }

    public function listArticles()
    {
        $articles = $this->articleDao->findAll();
        require('view/base.php');
    }

}
