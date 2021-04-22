<?php

class ProductLoader extends Database
{
    public function Product($id): ?array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('SELECT * FROM products WHERE products.id = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
        return $handle->fetch();
    }

    public function AllProducts(): ?array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('SELECT * FROM products');
        $handle->execute();
        return $handle->fetchAll();
    }
}
