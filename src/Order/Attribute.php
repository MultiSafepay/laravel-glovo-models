<?php

declare(strict_types=1);

namespace GlovoModels\Order;

use CastModels\Model;

class Attribute extends Model
{
    public string $id;
    public string $name;
    public int $price;
    public int $quantity;
}
