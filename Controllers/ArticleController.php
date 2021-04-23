<?php

class ArticleController
{
    public function render(): void
    {
        $loader = new ArticleLoader();
        $articles = $loader->AllArticles();


        $title = 'Welcome to the articles page';
        $welcomeText = 'Welcome to the articles page';

        require 'View/articles.php';
    }

    public function showDetailPage(): void
    {
        $loader = new ArticleLoader();
        $article = $loader->Article((string)$_GET['article_slug']);
        $title = 'Welcome to the article detail page';
        $detailText = 'Welcome to the article detail page';
        require 'View/article-detail.php';
    }
}
