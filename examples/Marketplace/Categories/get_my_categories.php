<?php

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_categories = $markabu->marketplace->MarkabuMarketplaceCategories();

    $categories = $markabu_marketplace_categories->get_my_categories();
    print_r($categories);
