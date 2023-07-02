<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/urun-entegrasyonu/urun-filtreleme

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_products = $markabu->marketplace->MarkabuMarketplaceProducts();

    $data = [
        'title'          => 'Dünyanın en güzel ürünün başlığı',
        'categoryId'     => 2840,
        'brandId'        => 1602974,
        'description'    => 'Dünyanın en güzel ürünün açıklaması',
        'quantity'       => 100,//Adet
        'cargoCompanyId' => 10,
    ];

    $product = $markabu_marketplace_products->update_product_info('XXXXXXX', $data);
    print_r($product);
