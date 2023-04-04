<?php


namespace App\Action\Product;


use App\DTO\Product\CreateProductDTO;
use App\Models\Product;
use Illuminate\Support\Facades\Config;

class CreateProductAction
{
   public  function  run(CreateProductDTO $dto): void
   {

       $product = new Product();
       $product->title       = $dto->getTitle();
       $product->quantity    = $dto->getQuantity();
       $product->price       = $dto->getPrice();
       $product->total_price = $dto->getQqs();
       $product->save();

   }
}
