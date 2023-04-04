<?php


namespace App\DTO\Product;


use Illuminate\Support\Facades\Config;

class CreateProductDTO
{
    private string $title;

    private int $quantity;
    private mixed $qqs;

    private float $price;


    public  function __construct(string $title ,int $quantity ,float $price) {
        $this->title = $title;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getQqs(): mixed
    {
        $qqs = Config::get('vat.qqs') ;
        return $this->qqs = ($this->getQuantity() * $this->price) * (1 + ($qqs / 100));
    }
}
