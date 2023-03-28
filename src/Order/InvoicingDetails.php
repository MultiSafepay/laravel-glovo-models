<?php

declare(strict_types=1);

namespace GlovoModels\Order;

use CastModels\Model;

class InvoicingDetails extends Model
{
    public string $company_name;
    public string $company_address;
    public string $tax_id;
}
