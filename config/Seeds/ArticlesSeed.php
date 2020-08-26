<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'はじめての投稿',
                'description' => 'はじめての投稿の概要',
                'body' => 'はじめての投稿の本文',
                'published' => 1,
                'created' => '2020-08-20 12:00:00',
                'modified' => '2020-08-20 12:00:00',
            ],
            [
                'title' => '２番目の投稿',
                'description' => '２番目の投稿の概要',
                'body' => '２番目の投稿の本文',
                'published' => 1,
                'created' => '2020-08-21 12:00:00',
                'modified' => '2020-08-21 12:00:00',
            ]
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
