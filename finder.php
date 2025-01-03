<?php
declare(strict_types=1);

use StubsGenerator\Finder;

return Finder::create()
    ->in('source/woo-custom-product-addons-pro')
    ->sortByName(true);
