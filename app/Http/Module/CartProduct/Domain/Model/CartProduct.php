<?php

namespace App\Http\Module\Product\Domain\Model;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CartProduct extends Pivot
{
    protected $fillable = ['cart_id', 'product_id'];
}
