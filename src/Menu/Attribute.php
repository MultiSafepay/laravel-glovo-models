<?php

declare(strict_types=1);

namespace GlovoModels\Menu;

use CastModels\Model;

class Attribute extends Model
{
    public string $id;
    public string $name;
    public bool $selected_by_default;
    public int $price_impact;
    public bool $available;
}
