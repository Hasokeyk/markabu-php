<?php

    //Source : https://developers.markabu.com/docs/marketplace/urun-entegrasyonu/markabu-marka-listesi

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_addresses = $markabu->marketplace->MarkabuMarketplaceAddresses();

    $addresses = $markabu_marketplace_addresses->get_my_addresses();
    print_r($addresses);
