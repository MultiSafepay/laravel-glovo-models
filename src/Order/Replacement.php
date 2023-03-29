<?php

declare(strict_types=1);

namespace GlovoModels\Order;

use CastModels\Model;

class Replacement extends Model
{
    public string $purchased_product_id;
    public Product $product;
}
