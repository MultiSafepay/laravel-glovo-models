<?php

declare(strict_types=1);

namespace Tests;

use GlovoModels\Menu\Attribute;
use GlovoModels\Menu\AttributeGroup;
use GlovoModels\Menu\Collection;
use GlovoModels\Menu\Menu;
use GlovoModels\Menu\SuperCollection;
use GlovoModels\Menu\Product;

class MenuTest extends \Orchestra\Testbench\TestCase
{
    use CompareArrayModel;

    public function testAttribute() : void
    {
        $data = $this->getData();
        $data = $data['attributes'];

        $collection = Attribute::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testAttributeGroup() : void
    {
        $data = $this->getData();
        $data = $data['attribute_groups'];

        $collection = AttributeGroup::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testProduct() : void
    {
        $data = $this->getData();
        $data = $data['products'];

        $collection = Product::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testCollection() : void
    {
        $data = $this->getData();
        $data = $data['collections'];

        $collection = Collection::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testSuperCollection() : void
    {
        $data = $this->getData();
        $data = $data['supercollections'];

        $collection = SuperCollection::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testMenu() : void
    {
        $data = $this->getData();

        $object = new Menu($data);

        $this->compareArrayModel($data, $object);
    }

    /** @return array<mixed> */
    private function getData(): array
    {
        $filePath = __DIR__.'/menu.json';
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
