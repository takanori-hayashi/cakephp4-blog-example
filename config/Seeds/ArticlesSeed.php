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
                'user_id' => 1,
                'created' => '2020-08-20 12:00:00',
                'modified' => '2020-08-20 12:00:00',
            ],
            [
                'title' => '２番目の投稿',
                'description' => '２番目の投稿の概要',
                'body' => '２番目の投稿の本文',
                'published' => 1,
                'user_id' => 1,
                'created' => '2020-08-21 12:00:00',
                'modified' => '2020-08-21 12:00:00',
            ],
            [
                'title' => 'テスト投稿',
                'description' => 'テスト投稿の概要',
                'body' => 'テスト投稿の本文',
                'published' => 0,
                'user_id' => 1,
                'created' => '2020-08-23 12:00:00',
                'modified' => '2020-08-23 12:00:00',
            ],
            [
                'title' => 'Hello World!',
                'description' => 'こんにちは世界',
                'body' => 'こんにちは世界！本文です。',
                'published' => 0,
                'user_id' => 2,
                'created' => '2020-08-23 08:00:00',
                'modified' => '2020-08-23 08:00:00',
            ],
            [
                'title' => 'ブログをはじめました',
                'description' => 'ブログをはじめました概要です',
                'body' => 'ブログをはじめました本文です。',
                'published' => 0,
                'user_id' => 2,
                'created' => '2020-08-20 20:00:00',
                'modified' => '2020-08-20 20:00:00',
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
