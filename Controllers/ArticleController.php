<?php


class ArticleController
{
    public function render(array $GET, array $POST): void
    {
        $title = 'Welcome to the articles page';
        $welcomeText = 'Welcome to the homepage';

        $loader = new ArticleLoader();
        $articles = $loader->AllArticles();

        require 'View/homepage.php';
    }

}
