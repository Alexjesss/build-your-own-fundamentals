<?php
declare(strict_types=1);
require 'includes/header.php';
?>

    <section>
        <h3><?php echo $welcomeText; ?></h3>
        <article>
            <?php foreach ($articles as $article) :?>
                <div>
                    <h2><?= $article['title'] ?></h2>
                    <a href="homepage.php?page=article-detail&article_slug=<?= $article['slug'] ?>">Tell me more</a>
                </div>

                <div>
                    <h2><?= $article['title'] ?></h2>
                    <p><?= $article['content'] ?></p>
                </div>
            <?php endforeach; ?>
        </article>
    </section>

    <?php require 'includes/footer.php' ?>
