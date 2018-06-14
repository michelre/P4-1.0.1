<?php

/**
 * CRUD -> Create Read Update Delete
 */

require_once('model/Article.php');

class ArticleDao
{

    public function findAll()
    {
        //TODO: Faire une requête en BD (SELECT * FROM article) et de converir ces données en un tableau d'objets Article
        $articles = array();
        array_push($articles, new Article('1', 'Un ours pars a l\'avanture', 'Content 1', '2018-06-09'));
		array_push($articles, new Article('2', 'Une nuit a la belle étoiles', 'Content 2', '2018-06-13'));
		array_push($articles, new Article('3', 'Une course extraordinaire', 'Content 2', '2018-06-13'));
		
        return $articles;
    }

    public function findById($articleId)
    {
        //TODO: SELECT * FROM article WHERE id = $articleId
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
