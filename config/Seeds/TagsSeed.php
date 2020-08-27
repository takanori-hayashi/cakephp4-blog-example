<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Tags seed.
 */
class TagsSeed extends AbstractSeed
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
                'title' => 'お知らせ',
                'created' => '2020-08-20 12:00:00',
                'modified' => '2020-08-20 12:00:00',
            ],
            [
                'title' => 'コラム',
                'created' => '2020-08-21 12:00:00',
                'modified' => '2020-08-21 12:00:00',
            ],
            [
                'title' => 'シャチ',
                'created' => '2020-08-22 12:00:00',
                'modified' => '2020-08-22 12:00:00',
            ],
            [
                'title' => '本',
                'created' => '2020-08-23 12:00:00',
                'modified' => '2020-08-23 12:00:00',
            ],
        ];


        $table = $this->table('tags');
        $table->insert($data)->save();

        $data = [
            [
                'article_id' => 1,
                'tag_id' => 1,
            ],
            [
                'article_id' => 1,
                'tag_id' => 2,
            ],
            [
                'article_id' => 2,
                'tag_id' => 2,
            ],
            [
                'article_id' => 2,
                'tag_id' => 3,
            ],
            [
                'article_id' => 3,
                'tag_id' => 3,
            ],
            [
                'article_id' => 3,
                'tag_id' => 4,
            ],
            [
                'article_id' => 4,
                'tag_id' => 4,
            ],
        ];

        $table = $this->table('articles_tags');
        $table->insert($data)->save();
    }
}
