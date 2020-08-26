<?php

namespace App\Controller;

class ArticlesController extends AppController
{
    public function initialize() : void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('test');
    }

    public function index()
    {
    }

    public function view($id = null)
    {
        $this->set(compact('id'));
    }
}