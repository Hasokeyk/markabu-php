<?php

    namespace Hasokeyk\Markabul\Marketplace;

    use Hasokeyk\Markabul\MarkabulRequest;

    class MarkabulMarketplaceAddresses{

        public $supplierId;
        public $username;
        public $password;

        function __construct($supplierId = null, $username = null, $password = null){
            $this->supplierId = $supplierId;
            $this->username   = $username;
            $this->password   = $password;
        }

        public function request(){
            return new MarkabulRequest($this->supplierId, $this->username, $this->password);
        }

        public function get_my_addresses(){
            $url    = 'https://api-az.markabu.com/v1/sapigw/suppliers/'.$this->supplierId.'/addresses';
            $result = $this->request()->get($url);
            return $result;
        }
    }