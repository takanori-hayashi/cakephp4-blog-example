<?php
/**
 * @var App\View\AppView $this
 * @var App\Model\Entity\Tag $tag
 */
?>
<div class="content">
    <p><?= $tag->created->i18nFormat('YYYY年MM月dd日 HH:mm') ?></p>
    <h1>#<?= h($tag->title) ?> 投稿一覧</h1>

    <?php foreach ($articles as $article) : ?>
        <h3><?= h($article->title) ?></h3>
        <p><?= $article->created->i18nFormat('YYYY年MM月dd日 HH:mm') ?></p>
        <?= $this->Text->autoParagraph(h($article->description)) ?>
        <p>
            <small>
                <?php if (!empty($article->tags)) : ?>
                    <?php foreach ($article->tags as $tag) : ?>
                        <?= $this->Html->link($tag->title,
                            ['action' => 'view', $tag->id,]) ?>
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

    <?= $this->Html->link('一覧', ['action' => 'index'], ['class' => 'button']) ?>
</div>