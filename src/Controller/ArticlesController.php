<?php

namespace App\Controller;

class ArticlesController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => ['created' => 'desc',],
        'contain' => 'Users',
    ];

    public function index()
    {
        $articles = $this->paginate($this->Articles->find());
        $this->set(compact('articles'));
    }

    public function view($id = null)
    {
        $article = $this->Articles->get($id, ['contain' => 'Users']);
        $this->set(compact('article'));
    }
}