<?php

class ProductLoader extends Database
{
    public function AllProducts(): ?array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('SELECT * FROM products');
        $handle->execute();
        return $handle->fetchAll();
    }
}
