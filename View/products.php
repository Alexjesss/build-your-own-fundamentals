<?php
declare(strict_types=1);
require 'includes/header.php'
/** @var array $products */
/** @var string $welcomeText */
?>

<h3><?php echo $welcomeText; ?></h3>

<?php foreach ($products as $product) : ?>
<div class="col-6 products">
        <div>
            <h2><?= $product['name'] ?></h2>
            <p>Price (tax included): €<?= round($product['price'] * (1 + $product['tax']), 2) ?></p>
        </div>
</div>
<?php endforeach; ?>

<?php require 'includes/footer.php' ?>







