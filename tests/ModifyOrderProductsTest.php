<?php

declare(strict_types=1);

namespace Tests;

use GlovoModels\Order\Courier;
use GlovoModels\Order\Customer;
use GlovoModels\Order\DeliveryAddress;
use GlovoModels\Order\Order;
use GlovoModels\Order\Product;
use GlovoModels\Order\Replacement;

class ModifyOrderProductsTest extends \Orchestra\Testbench\TestCase
{
    use CompareArrayModel;

    public function testReplacement() : void
    {
        $data = $this->getData();
        $data = $data['replacements'];

        $collection = Replacement::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    /** @return array<mixed> */
    private function getData(): array
    {
        $filePath = __DIR__.'/modifyOrderProducts.json';
        $this->assertFileExists($filePath);
        $this->assertFileIsReadable($filePath);

        $jsonData = file_get_contents($filePath);

        $this->assertIsString($jsonData);

        $data = json_decode($jsonData, true);

        $this->assertNotEmpty($data);
        $this->assertIsArray($data);

        return $data;
    }
}
