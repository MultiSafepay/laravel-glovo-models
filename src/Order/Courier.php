<?php

declare(strict_types=1);

namespace GlovoModels\Order;

use CastModels\Model;

class Courier extends Model
{
    public string $name;
    public string $phone_number;
}
