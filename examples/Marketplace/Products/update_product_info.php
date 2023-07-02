<?php

    //Source : https://developers.markabul.com/tr/marketplace-entegrasyonu/urun-entegrasyonu/urun-filtreleme

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_products = $markabul->marketplace->MarkabulMarketplaceProducts();

    $data = [
        'title'          => 'Dünyanın en güzel ürünün başlığı',
        'categoryId'     => 2840,
        'brandId'        => 1602974,
        'description'    => 'Dünyanın en güzel ürünün açıklaması',
        'quantity'       => 100,//Adet
        'cargoCompanyId' => 10,
    ];

    $product = $markabul_marketplace_products->update_product_info('XXXXXXX', $data);
    print_r($product);
