<?php


namespace App\Action\Product;


use App\DTO\Product\CreateProductDTO;
use App\Models\Product;

class UpdateProductAction
{

    public  function run(Product $product , CreateProductDTO $dto): void
    {

        $product->title = $dto->getTitle();
        $product->quantity = $dto->getQuantity();
        $product->price = $dto->getPrice();
        $product->total_price = $dto->getQqs();
        $product->save();
    }
}
