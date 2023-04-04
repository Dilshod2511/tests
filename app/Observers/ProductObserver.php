<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\ProductHistory;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     *
     * @param Product $product
     * @return void
     */
    public function created(Product $product): void
    {
        $this->saveProductHistory(ProductHistory::PRODUCT_CREATED, $product);
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param Product $product
     * @return void
     */
    public function updated(Product $product): void
    {
        $this->saveProductHistory(ProductHistory::PRODUCT_UPDATED, $product);
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param Product $product
     * @return void
     */
    public function deleted(Product $product): void
    {
        $this->saveProductHistory(ProductHistory::PRODUCT_DELETED, $product);
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param Product $product
     * @return void
     */
    public function restored(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param Product $product
     * @return void
     */
    public function forceDeleted(Product $product): void
    {
        //
    }

    private function saveProductHistory(string $status, Product $product): void
    {
        $productHistory = new ProductHistory();
        $productHistory->title = $product->title;
        $productHistory->quantity = $product->quantity;
        $productHistory->price = $product->price;
        $productHistory->total_price = $product->total_price;
        $productHistory->user_id = auth()->user()->id;
        $productHistory->product_id = $product->id;
        $productHistory->status = $status;
        $productHistory->save();
    }
}
