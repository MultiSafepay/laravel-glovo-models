<?php

declare(strict_types=1);

namespace GlovoModels\Store;

use CastModels\Model;

class TimeSlot extends Model
{
    public string $opening;
    public string $closing;
}
