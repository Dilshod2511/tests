<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductHistory extends Model
{
    use HasFactory;

    CONST PRODUCT_CREATED = 'PRODUCT_CREATED';
    CONST PRODUCT_UPDATED = 'PRODUCT_UPDATED';
    CONST PRODUCT_DELETED = 'PRODUCT_DELETED';

    protected $table = 'product_history';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
