<?php

    namespace Hasokeyk\Markabu\Marketplace;

    use Hasokeyk\Markabu\MarkabuRequest;

    class MarkabuMarketplaceAddresses{

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

        public function get_my_addresses(){
            $url    = 'https://api.markabu.com/v1/sapigw/suppliers/'.$this->supplierId.'/addresses';
            $result = $this->request()->get($url);
            return $result;
        }
    }