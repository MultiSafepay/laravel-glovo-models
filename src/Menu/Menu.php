<?php

declare(strict_types=1);

namespace GlovoModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection as LaravelCollection;

class Menu extends Model
{
    /** \GlovoModels\Menu\Attribute */
    public LaravelCollection $attributes;
    /** \GlovoModels\Menu\AttributeGroup */
    public LaravelCollection $attribute_groups;
    /** \GlovoModels\Menu\Product */
    public LaravelCollection $products;
    /** \GlovoModels\Menu\Collection */
    public LaravelCollection $collections;
    /** \GlovoModels\Menu\SuperCollection */
    public LaravelCollection $supercollections;
}
