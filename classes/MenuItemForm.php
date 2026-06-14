<?php

class MenuItemForm
{
    private string $name;
    private string $description;
    private string $price;
    private string $image;
    private string $category;
    private string $error = '';

    public function __construct(array $data)
    {
        $this->name = trim($data['name'] ?? '');
        $this->description = trim($data['description'] ?? '');
        $this->price = trim($data['price'] ?? '');
        $this->image = trim($data['image'] ?? '');
        $this->category = trim($data['category'] ?? '');
    }

    public function isValid(): bool
    {
        if (
            $this->name === '' ||
            $this->description === '' ||
            $this->price === '' ||
            $this->image === '' ||
            $this->category === ''
        ) {
            $this->error = 'Prosím vyplň všetky polia.';
            return false;
        }

        if (!is_numeric($this->price)) {
            $this->error = 'Cena musí byť číslo.';
            return false;
        }

        if ((float)$this->price <= 0) {
            $this->error = 'Cena musí byť väčšia ako 0.';
            return false;
        }

        return true;
    }

    public function getError(): string
    {
        return $this->error;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getPriceAsFloat(): float
    {
        return (float)$this->price;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}