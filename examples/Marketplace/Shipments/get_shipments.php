<?php

    //Source : https://developers.markabul.com/tr/marketplace-entegrasyonu/siparis-entegrasyonu/siparis-paketlerini-cekme

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_shipments = $markabul->marketplace->MarkabulMarketplaceShipment();

    $shipments = $markabul_marketplace_shipments->get_shipment_companies();
    print_r($shipments);
