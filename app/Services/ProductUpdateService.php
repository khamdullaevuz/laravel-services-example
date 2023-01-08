<?php

namespace App\Services;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductUpdateService
{
    public function handle(Product $product, ProductRequest $request): ProductResource
    {
        $product->update($request->validated());
        return new ProductResource($product);
    }
}
