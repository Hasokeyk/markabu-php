<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/urun-entegrasyonu/v2/urun-aktarma-2

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_products = $markabu->marketplace->MarkabuMarketplaceProducts();

    $data = [
        'barcode'            => 'XXXXXXX',
        'title'              => 'Dünyanın en güzel ürünün başlığı',
        'categoryId'         => 2840,
        'brandId'            => 1602974,
        'description'        => 'Dünyanın en güzel ürünün açıklaması',
        'quantity'           => 100,//Adet
        'listPrice'          => 200,
        'salePrice'          => 200,
        'cargoCompanyId'     => 1,
        'deliveryDuration'   => 2,
        'dimensionalWeight'  => 1,
        'shipmentAddressId'  => 5521774,
        'returningAddressId' => 5521772,
        'images'             => [
            ['url' => 'Tam_ürün_linki'],
        ],
    ];

    $product = $markabu_marketplace_products->create_product($data);
    print_r($product);
