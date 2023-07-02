<?php

    //Source : https://developers.markabu.com/tr/marketplace-entegrasyonu/soru-cevap-entegrasyonu/musteri-sorularini-cekme

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_customer_questions = $markabu->marketplace->MarkabuMarketplaceCustomerQuestions();

    $filter             = [
        'status' => 'WAITING_FOR_ANSWER', //WAITING_FOR_ANSWER, WAITING_FOR_APPROVE, ANSWERED, REPORTED, REJECTED
    ];
    $customer_questions = $markabu_marketplace_customer_questions->get_my_customer_questions($filter);
    print_r($customer_questions);
