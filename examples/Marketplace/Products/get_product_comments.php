<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/urun-entegrasyonu/urun-filtreleme

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabul($supplierId, $username, $password);

    $markabu_marketplace_products = $markabu->marketplace->MarkabulMarketplaceProducts();

    //BARKOD NUMARASI MARKABUDA EKLENEN ÖZEL BİR NUMARADIR. BU NUMARAYI SADECE MAĞAZA SAHİPLERİ BİLEBİLİR
    //O YÜZDEN BAŞKA BİR MAĞAZANIN ÜRÜNÜNÜN YORUMLARINI ÇEKEMEZSİNİZ
    $products = $markabu_marketplace_products->get_product_comment(123456789);
    print_r($products);

