<?php

    //Source : https://developers.markabul.com/tr/marketplace-entegrasyonu/urun-entegrasyonu/urun-filtreleme

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_products = $markabul->marketplace->MarkabulMarketplaceProducts();

    $product = $markabul_marketplace_products->update_product_brand('XXXXXXX', 123456);
    print_r($product);
