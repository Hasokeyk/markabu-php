<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/siparis-entegrasyonu/siparis-paketlerini-cekme

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_order = $markabu->marketplace->MarkabuMarketplaceOrders();

    $filter = [
        'status' => 'Created',//Created, Picking, Invoiced, Shipped ,Cancelled, Delivered, UnDelivered, Returned, Repack, UnPacked, UnSupplied
    ];
    $orders = $markabu_marketplace_order->get_my_orders($filter);
    print_r($orders);
