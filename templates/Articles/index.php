<?php
/**
 * @var App\View\AppView $this
 * @var App\Model\Entity\Article[] $articles
 */
?>
<div class="content">
    <?php foreach ($articles as $article) : ?>
        <h3><?= $article->title ?></h3>
        <p><?= $article->description ?></p>
        <hr>
    <?php endforeach; ?>
</div>