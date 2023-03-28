<?php

declare(strict_types=1);

namespace GlovoModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection as LaravelCollection;

class Collection extends Model
{
    public string $name;
    public int $position;
    public string $image_url;
    /** \GlovoModels\Menu\Section */
    public LaravelCollection $sections;
}
