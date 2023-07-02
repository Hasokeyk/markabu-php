<?php

    //Source : https://developers.markabul.com/tr/marketplace-entegrasyonu/siparis-entegrasyonu/siparis-paketlerini-cekme

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_order = $markabul->marketplace->MarkabulMarketplaceOrders();

    $filter = [
        'status' => 'Created',//Created, Picking, Invoiced, Shipped ,Cancelled, Delivered, UnDelivered, Returned, Repack, UnPacked, UnSupplied
    ];
    $orders = $markabul_marketplace_order->get_my_orders($filter);
    print_r($orders);
