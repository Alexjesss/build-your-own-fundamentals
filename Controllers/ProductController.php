<?php


class ProductController
{
    public function render(): void
    {
        $loader = new ProductLoader();
        $products = $loader->AllProducts();

        $title = 'Welcome to the products page';
        $welcomeText = 'Welcome to the products page';
        require 'View/products.php';
    }
}
