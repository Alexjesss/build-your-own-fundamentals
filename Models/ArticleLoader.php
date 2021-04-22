<?php

class ArticleLoader extends Database
{
    public function Article($id): ?array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('SELECT * FROM articles WHERE articles.id = :id');
        $handle->bindValue(':id', $id);
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

