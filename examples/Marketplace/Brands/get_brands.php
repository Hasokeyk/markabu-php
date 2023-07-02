<?php

    //Source : https://developers.markabu.com/docs/marketplace/urun-entegrasyonu/markabu-marka-listesi

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_brands = $markabu->marketplace->MarkabuMarketplaceBrands();

    $brands = $markabu_marketplace_brands->get_brands();
    print_r($brands);
