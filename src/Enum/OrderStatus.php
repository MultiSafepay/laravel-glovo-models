<?php

declare(strict_types=1);

namespace GlovoModels\Enum;

enum OrderStatus: string
{
    use Helper;

    case accepted = 'ACCEPTED';
    case ready_for_pickup = 'READY_FOR_PICKUP';
    case out_for_delivery = 'OUT_FOR_DELIVERY';
    case picked_up_by_customer = 'PICKED_UP_BY_CUSTOMER';
}
