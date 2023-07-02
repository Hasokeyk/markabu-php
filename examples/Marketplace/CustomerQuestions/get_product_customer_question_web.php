<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/urun-entegrasyonu/urun-filtreleme

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_customer_questions = $markabu->marketplace->MarkabuMarketplaceCustomerQuestions();

    //BARKOD NUMARASI MARKABUDA EKLENEN ÖZEL BİR NUMARADIR. BU NUMARAYI SADECE MAĞAZA SAHİPLERİ BİLEBİLİR
    //O YÜZDEN BAŞKA BİR MAĞAZANIN ÜRÜNÜNÜN YORUMLARINI ÇEKEMEZSİNİZ
    $products = $markabu_marketplace_customer_questions->get_product_question_web(123456789);
    print_r($products);

