<?php
declare(strict_types=1);
require 'includes/header.php';
/** @var array $articles */
/** @var string $welcomeText */
?>

<section class="mx-auto text-center">
    <h3><?php echo $welcomeText; ?></h3>

    <?php foreach ($articles as $article) : ?>
        <div class="container">
            <div class="article col-4">
                <h2><?= $article['title'] ?></h2>
                <a href="index.php?page=article-detail&article_slug=<?= $article['slug'] ?>">Tell me more</a>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<?php require 'includes/footer.php' ?>
