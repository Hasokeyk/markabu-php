<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/soru-cevap-entegrasyonu/musteri-sorularini-cevaplama

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabul($supplierId, $username, $password);

    $markabu_marketplace_customer_questions = $markabu->marketplace->MarkabulMarketplaceCustomerQuestions();

    $customer_questions = $markabu_marketplace_customer_questions->answer_customer_question(12,'Dünyanın en güzel sorusunun cevabı');
    print_r($customer_questions);
