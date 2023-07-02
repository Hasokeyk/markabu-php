<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/siparis-entegrasyonu/siparis-paketlerini-cekme

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_shipments = $markabu->marketplace->MarkabuMarketplaceShipment();

    $shipments = $markabu_marketplace_shipments->get_shipment_companies();
    print_r($shipments);
