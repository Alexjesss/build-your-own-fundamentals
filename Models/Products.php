<?php


class Products
{
    private int $id;
    private string $name;
    private int $price;
    private int $tax;

    public function __construct(int $id, string $name, int $price, int $tax)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }


    public function getTax(): int
    {
        return $this->tax;
    }
}



