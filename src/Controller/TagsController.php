<?php

namespace App\Controller;

class TagsController extends AppController
{
    public function initialize() : void
    {
        parent::initialize();
        $this->loadModel('Articles');
    }

    public function index()
    {

        $this->paginate = [
            'limit' => 10,
            'order' => ['created' => 'desc',],
        ];
        $tags = $this->paginate($this->Tags->find());
        $this->set(compact('tags'));
    }

    public function view($id = null)
    {
        $tag = $this->Tags->get($id, ['contain' => 'Articles']);

        $this->paginate = [
            'limit' => 10,
            'order' => ['Articles.created' => 'desc',],
            'contain' => ['Users', 'Tags'],
        ];

        $articles = $this->Articles->find()
                                   ->matching(
                                        'Tags',
                                        function($q) use ($id) {
                                            return $q->where(['Tags.id' => $id]);
                                        }
                                   );
        $articles = $this->paginate($articles);
        $this->set(compact('tag', 'articles'));
    }
}