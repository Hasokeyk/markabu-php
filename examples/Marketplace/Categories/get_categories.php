<?php

    //Source : https://developers.markabu.com/docs/marketplace/urun-entegrasyonu/markabu-kategori-listesi

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabul($supplierId, $username, $password);

    $markabu_marketplace_categories = $markabu->marketplace->MarkabulMarketplaceCategories();

    $categories = $markabu_marketplace_categories->get_categories();
    print_r($categories);
