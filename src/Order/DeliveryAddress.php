<?php

declare(strict_types=1);

namespace GlovoModels\Order;

use CastModels\Model;

class DeliveryAddress extends Model
{
    public string $label;
    public float $latitude;
    public float $longitude;
}
