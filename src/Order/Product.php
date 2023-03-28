<?php

declare(strict_types=1);

namespace GlovoModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class Product extends Model
{
    public string $id;
    public string $purchased_product_id;
    public string $name;
    public float $price;
    public int $quantity;
    /** \GlovoModels\Order\Attribute */
    public Collection $attributes;
}
