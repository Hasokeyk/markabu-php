<?php

    //Source : https://developers.markabul.com/docs/marketplace/urun-entegrasyonu/markabul-marka-listesi

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username = 'XXXXXXXXXXXXXXXXXXXX';
    $password = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_brands = $markabul->marketplace->MarkabulMarketplaceBrands();

    $brands = $markabul_marketplace_brands->search_brand('Herkesalıyo');
    print_r($brands);
