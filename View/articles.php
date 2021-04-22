<?php
declare(strict_types=1);
require 'includes/header.php';
/** @var array $articles */
/** @var string $welcomeText */
?>

<section>
    <h3><?php echo $welcomeText; ?></h3>

    <?php foreach ($articles as $article) : ?>
        <div class="container">
            <div class="article col-4">
                <img src="assets/tiramisu.jpg" alt="tiramisu" width="250" height="250">
                <h2><?= $article['title'] ?></h2>
                <a href="homepage.php?page=article-detail&article_slug=<?= $article['slug'] ?>">Tell me more</a>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<?php require 'includes/footer.php' ?>
