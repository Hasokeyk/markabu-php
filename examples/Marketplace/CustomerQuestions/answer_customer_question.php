<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/soru-cevap-entegrasyonu/musteri-sorularini-cevaplama

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_customer_questions = $markabu->marketplace->MarkabuMarketplaceCustomerQuestions();

    $customer_questions = $markabu_marketplace_customer_questions->answer_customer_question(12,'Dünyanın en güzel sorusunun cevabı');
    print_r($customer_questions);
