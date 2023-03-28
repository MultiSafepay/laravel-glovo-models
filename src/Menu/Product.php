<?php

declare(strict_types=1);

namespace GlovoModels\Menu;

use CastModels\Model;

class Product extends Model
{
    public string $id;
    public string $name;
    public float $price;
    public string $image_url;
    public Resctrictions $restrictions;
    /** @var array<string> $extra_image_urls */
    public array $extra_image_urls;
    public string $description;
    /** @var array<string> $attributes_groups */
    public array $attributes_groups;
    public bool $available;
}
