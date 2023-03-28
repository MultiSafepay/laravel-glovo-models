<?php

declare(strict_types=1);

namespace GlovoModels\Order;

use CastModels\Model;
use Illuminate\Support\Collection;

class Order extends Model
{
    public string $order_id;
    public string $store_id;
    public string $order_time;
    public string $estimated_pickup_time;
    public string $utc_offset_minutes;
    public string $payment_method;
    public string $currency;
    public string $order_code;
    public string $allergy_info;
    public string $special_requirements;
    public int $estimated_total_price;
    public int $delivery_fee;
    public int $minimum_basket_surcharge;
    public int $customer_cash_payment_amount;
    public Courier $courier;
    public Customer $customer;
    /** \GlovoModels\Order\Product */
    public Collection $products;
    public DeliveryAddress $delivery_address;
    /** @var array<string> $bundled_orders */
    public array $bundled_orders;
    public string $pick_up_code;
    public bool $is_picked_up_by_customer;
    public bool $cutlery_requested;
    public int $partner_discounts_products;
    public int $partner_discounted_products_total;
    public int $total_customer_to_pay;
    public string $loyalty_card;
}
