<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/siparis-entegrasyonu/siparis-paketlerini-cekme

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabul($supplierId, $username, $password);

    $markabu_marketplace_shipments = $markabu->marketplace->MarkabulMarketplaceShipment();

    $shipments = $markabu_marketplace_shipments->get_shipment_companies();
    print_r($shipments);
