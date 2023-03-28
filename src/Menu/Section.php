<?php

declare(strict_types=1);

namespace GlovoModels\Menu;

use CastModels\Model;

class Section extends Model
{
    public string $name;
    public int $position;
    /** @var array<string> $products */
    public array $products;
}
