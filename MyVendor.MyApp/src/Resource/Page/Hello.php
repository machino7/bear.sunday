<?php
namespace MyVendor\MyApp\Resource\Page;

use BEAR\Resource\ResourceObject;

class Hello extends ResourceObject
{
    public function onGet(string $name = 'Bear.Sunday') : ResourceObject
    {
        $this->body = [
            'greeting' => 'Greeting ' . $name
        ];

        return $this;
    }
}
