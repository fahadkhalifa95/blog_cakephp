<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class ArticleController extends AppController
{
    public function index()
    {
        $Article = TableRegistry::getTableLocator()->get('articlles');
        $query = $Article->find('all');

        $data = $query->toArray(); // array of objects

        $this->set('articles', $data);
    }


    /**
     *
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $title = $this->request->data('title');
            $author = $this->request->data('author');
            $body = $this->request->data('body');

            $articleTable = TableRegistry::get('articlles');
            $article = $articleTable->newEntity();
            $article->title = $title;
            $article->author = $author;
            $article->body = $body;


            if ($articleTable->save($article))
                echo " add";
        }


    }
}