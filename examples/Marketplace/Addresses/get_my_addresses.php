<?php

    //Source : https://developers.markabu.com/docs/marketplace/urun-entegrasyonu/markabu-marka-listesi

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabul($supplierId, $username, $password);

    $markabu_marketplace_addresses = $markabu->marketplace->MarkabulMarketplaceAddresses();

    $addresses = $markabu_marketplace_addresses->get_my_addresses();
    print_r($addresses);
