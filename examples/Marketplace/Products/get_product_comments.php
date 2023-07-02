<?php

    //Source : https://developers.markabul.com/tr/marketplace-entegrasyonu/urun-entegrasyonu/urun-filtreleme

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_products = $markabul->marketplace->MarkabulMarketplaceProducts();

    //BARKOD NUMARASI MARKABULDA EKLENEN ÖZEL BİR NUMARADIR. BU NUMARAYI SADECE MAĞAZA SAHİPLERİ BİLEBİLİR
    //O YÜZDEN BAŞKA BİR MAĞAZANIN ÜRÜNÜNÜN YORUMLARINI ÇEKEMEZSİNİZ
    $products = $markabul_marketplace_products->get_product_comment(123456789);
    print_r($products);

