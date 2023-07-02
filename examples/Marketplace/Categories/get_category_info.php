<?php

    //Source : https://developers.markabu.com/docs/marketplace/urun-entegrasyonu/markabu-kategori-ozellik-listesi

    use Hasokeyk\Markabu\Markabu;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_categories = $markabu->marketplace->MarkabuMarketplaceCategories();

    $categories = $markabu_marketplace_categories->get_category_info(2610);
    print_r($categories);
