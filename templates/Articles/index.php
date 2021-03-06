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
        <p>
            <small>
                <?php if (!empty($article->tags)) : ?>
                    <?php foreach ($article->tags as $tag) : ?>
                        <?= $this->Html->link($tag->title,
                            [
                                'controller' => 'tags',
                                'action' => 'view',
                                $tag->id,
                            ]) ?>
                        <?= $tag !== end($article->tags) ? ',' : '' ?>
                    <?php endforeach; ?> / 
                <?php endif; ?>
                投稿者：<?= h($article->user->username) ?>
            </small>
        </p>
        <?= $this->Html->link('記事を見る', [
            'action' => 'view',
            $article->id,
        ],
        [
          'class' => 'button',
        ]) ?>
        <hr>
    <?php endforeach; ?>

    <?php if ($this->Paginator->total() > 1) : ?>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('最初') ?>
                <?= $this->Paginator->prev('← 前へ') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('次へ →') ?>
                <?= $this->Paginator->last('最後') ?>
            </ul>
        </div>
    <?php endif; ?>
</div>