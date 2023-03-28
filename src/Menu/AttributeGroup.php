<?php

declare(strict_types=1);

namespace GlovoModels\Menu;

use CastModels\Model;

class AttributeGroup extends Model
{
    public string $id;
    public string $name;
    public int $min;
    public int $max;
    public bool $collapse;
    public bool $multiple_selection;
    /** @var array<string> $attributes */
    public array $attributes;
}
