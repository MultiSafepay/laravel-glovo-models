<?php

declare(strict_types=1);

namespace GlovoModels\Store;

use CastModels\Model;
use Illuminate\Support\Collection;

class Schedule extends Model
{
    public int $day_of_week;
    /** \GlovoModels\Store\TimeSlot */
    public Collection $time_slots;
}
