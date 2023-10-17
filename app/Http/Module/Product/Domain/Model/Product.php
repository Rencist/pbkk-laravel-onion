<?php

namespace App\Http\Module\Product\Domain\Model;

use App\Models\Cart;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Notifications\Notifiable;

class Product
{

    use HasApiTokens, HasFactory, Notifiable;
    
    /**
     * @param string $nama
     * @param float $price
     * @param string $description
     */
    public function __construct(
        public string $nama,
        public float $price,
        public string $description,
    )
    {
    }
}
