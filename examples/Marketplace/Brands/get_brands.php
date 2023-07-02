<?php

    //Source : https://developers.markabu.com/docs/marketplace/urun-entegrasyonu/markabu-marka-listesi

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabul($supplierId, $username, $password);

    $markabu_marketplace_brands = $markabu->marketplace->MarkabulMarketplaceBrands();

    $brands = $markabu_marketplace_brands->get_brands();
    print_r($brands);
