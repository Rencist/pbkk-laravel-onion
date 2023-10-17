<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Module\Product\Domain\Model\CartProduct;

class CartProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pivots = [[
            'cart_id' => 1,
            'product_id' => 1
        ], [
            'cart_id' => 1,
            'product_id' => 2
        ]];

        foreach($pivots as $pivot){
            CartProduct::create($pivot);
        }
    }
}
