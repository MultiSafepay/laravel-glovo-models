<?php

declare(strict_types=1);

namespace GlovoModels\Menu;

use CastModels\Model;

class SuperCollection extends Model
{
    public string $name;
    public int $position;
    public string $image_url;
    /** @var array<string> $collections */
    public array $collections;
}
