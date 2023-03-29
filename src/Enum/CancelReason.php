<?php

declare(strict_types=1);

namespace GlovoModels\Enum;

enum CancelReason: string
{
    use Helper;

    case products_not_available = 'PRODUCTS_NOT_AVAILABLE';
    case store_can_not_delivery = 'STORE_CAN_NOT_DELIVER';
    case partner_printer_issue = 'PARTNER_PRINTER_ISSUE';
    case user_error = 'USER_ERROR';
    case order_not_feasible = 'ORDER_NOT_FEASIBLE';
    case other = 'OTHER';
}
