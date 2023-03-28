<?php

declare(strict_types=1);

namespace GlovoModels\Order;

use CastModels\Model;

class Customer extends Model
{
    public string $name;
    public string $phone_number;
    public string $hash;
    public InvoicingDetails $invoicing_details;
}
