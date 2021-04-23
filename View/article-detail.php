<?php
declare(strict_types=1);
require 'includes/header.php'
/** @var array $article */
/** @var string $detailText */
?>

<section>
    <h3><?php echo $detailText; ?></h3>

    <article>
        <h2 class="articleText"><?= $article['title'] ?></h2>
        <p class="content"><?= $article['content'] ?></p>
    </article>
</section>

<?php require 'includes/footer.php' ?>
