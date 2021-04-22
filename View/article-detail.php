<?php if ($_GET['page'] == 'article-detail' && !empty($_GET['article_slug'])) : ?>
    <?php
    $article = null;

    foreach ($articles as $articleToCheck) {
        if ($articleToCheck['slug'] === $_GET['article_slug']) {
            $article = $articleToCheck;
        }
    }
    ?>

<?php endif; ?>
