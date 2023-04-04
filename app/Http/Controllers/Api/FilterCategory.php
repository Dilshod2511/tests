<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\ProductHistory;
use App\QueryFilter\PostFilter;
use Illuminate\Http\Request;

class FilterCategory extends Controller
{
    public function filter(Request $request)
    {
        $filter = ProductHistory::query()->with('user','product');
       $query = (new PostFilter($filter, $request))->apply()->get();

        return ProductResource::collection($query);
    }
}
