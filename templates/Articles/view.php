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
    <p><small>投稿者：<?= h($article->user->username) ?></small></p>
    <hr>
    <?= $this->Html->link('一覧', ['action' => 'index'], ['class' => 'button']) ?>
</div>