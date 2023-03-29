<?php

declare(strict_types=1);

namespace GlovoModels\Enum;

enum PaymentMethod: string
{
    use Helper;

    case cash = 'CASH';
    case delayed = 'DELAYED';
}
