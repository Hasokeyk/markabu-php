<?php

    namespace Hasokeyk\Markabu\Marketplace;

    use Hasokeyk\Markabu\MarkabuRequest;

    class MarkabuMarketplaceBrands{

        public $supplierId;
        public $username;
        public $password;

        function __construct($supplierId = null, $username = null, $password = null){
            $this->supplierId = $supplierId;
            $this->username   = $username;
            $this->password   = $password;
        }

        public function request(){
            return new MarkabuRequest($this->supplierId, $this->username, $this->password);
        }

        public function get_brands(){
            $url = 'https://api-az.markabu.com/v1/sapigw/brands';
            $result = $this->request()->get($url);
            return $result;
        }

        public function search_brand($brand_name = null){
            $url    = 'https://api-az.markabu.com/v1/sapigw/brands/by-name?name='.$brand_name;
            $result = $this->request()->get($url);
            return $result;
        }
    }