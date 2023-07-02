<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/urun-entegrasyonu/urun-filtreleme

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_products = $markabu->marketplace->MarkabuMarketplaceProducts();

    $product = $markabu_marketplace_products->update_product_title('XXXXXXX', 'Dünyanın en güzel ürününün yeni ismi');
    print_r($product);
