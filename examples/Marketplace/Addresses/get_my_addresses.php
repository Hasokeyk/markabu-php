<?php

    //Source : https://developers.markabul.com/docs/marketplace/urun-entegrasyonu/markabul-marka-listesi

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_addresses = $markabul->marketplace->MarkabulMarketplaceAddresses();

    $addresses = $markabul_marketplace_addresses->get_my_addresses();
    print_r($addresses);
