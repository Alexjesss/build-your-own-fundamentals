<?php

class ArticleLoader extends Database
{
    public function Article(string $slug)
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('SELECT * FROM Articles WHERE slug = :slug');
        $handle->bindValue(':slug', $slug);
        $handle->execute();
        return $handle->fetch();
    }

    public function AllArticles(): ?array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('SELECT * FROM articles');
        $handle->execute();
        return $handle->fetchAll();
    }

}

