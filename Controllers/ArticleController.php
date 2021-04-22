<?php

class ArticleController
{
    public function render(array $GET, array $POST): void
    {
        $loader = new ArticleLoader();
        $articles = $loader->AllArticles();

        $title = 'Welcome to the articles page';
        $welcomeText = 'Welcome to the articles page';
        require 'View/articles.php';
    }
}
