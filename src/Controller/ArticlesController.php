<?php

namespace App\Controller;

class ArticlesController extends AppController
{
    public $autoRender = false;

    public function index()
    {
        echo 'Articles Index!';
    }

    public function view($id = null)
    {
        echo 'ID: ' . $id . ' Articles View!';
    }
}