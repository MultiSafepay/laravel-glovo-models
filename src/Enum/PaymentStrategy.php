<?php

declare(strict_types=1);

namespace GlovoModels\Enum;

enum PaymentStrategy: string
{
    use Helper;

    case pay_nothing = 'PAY_NOTHING';
    case pay_products = 'PAY_PRODUCTS';
}
