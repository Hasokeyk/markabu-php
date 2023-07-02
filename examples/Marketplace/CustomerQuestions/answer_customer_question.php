<?php

    //Source : https://developers.markabul.com/tr/marketplace-entegrasyonu/soru-cevap-entegrasyonu/musteri-sorularini-cevaplama

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_customer_questions = $markabul->marketplace->MarkabulMarketplaceCustomerQuestions();

    $customer_questions = $markabul_marketplace_customer_questions->answer_customer_question(12,'Dünyanın en güzel sorusunun cevabı');
    print_r($customer_questions);
