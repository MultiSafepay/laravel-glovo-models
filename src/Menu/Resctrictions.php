<?php

declare(strict_types=1);

namespace GlovoModels\Menu;

use CastModels\Model;

class Resctrictions extends Model
{
    public bool $is_alcoholic;
    public bool $is_tobacco;
}
