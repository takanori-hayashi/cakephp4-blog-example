<?php
/**
 * @var App\View\AppView $this
 * @var App\Model\Entity\Article[] $articles
 */
?>
<div class="content">
    <?php foreach ($articles as $article) : ?>
        <h3><?= h($article->title) ?></h3>
        <p><?= $article->created->i18nFormat('YYYY年MM月dd日 HH:mm') ?></p>
        <?= $this->Text->autoParagraph(h($article->description)) ?>
        <?= $this->Html->link('記事を見る', [
            'action' => 'view',
            $article->id,
        ],
        [
          'class' => 'button',
        ]) ?>
        <hr>
    <?php endforeach; ?>
</div>