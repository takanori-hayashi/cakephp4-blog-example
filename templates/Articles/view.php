<?php
/**
 * @var App\View\AppView $this
 * @var App\Model\Entity\Article $article
 */
?>
<div class="content">
    <p><?= $article->created->i18nFormat('YYYY年MM月dd日 HH:mm') ?></p>
    <h1><?= h($article->title) ?></h1>
    <div><?= $this->Text->autoParagraph(h($article->body)) ?></div>
    <?php if (!empty($article->tags)) : ?>
        <p><small>タグ：

        <?php foreach ($article->tags as $tag) : ?>
            <?= $this->Html->link($tag->title,
                [
                    'controller' => 'tags',
                    'action' => 'view',
                    $tag->id,
                ]) ?>
            <?= $tag !== end($article->tags) ? ',' : '' ?>
        <?php endforeach; ?>
        </small></p>
    <?php endif; ?>
    <p><small>投稿者：<?= h($article->user->username) ?></small></p>
    <hr>
    <?= $this->Html->link('一覧', ['action' => 'index'], ['class' => 'button']) ?>
</div>