<?php

namespace App\Controller;

class ArticlesController extends AppController
{
    public $paginate = [
        'limit' => 2,
        'order' => ['created' => 'desc',]
    ];

    public function index()
    {
        $articles = $this->paginate($this->Articles->find());
        $this->set(compact('articles'));
    }

    public function view($id = null)
    {
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
    }
}