<?php

    namespace Hasokeyk\Markabu;

    use Hasokeyk\Markabu\Marketplace\MarkabuMarketplace;

    class Markabu{

        public $supplierId;
        public $username;
        public $password;

        public $marketplace;
        public $request;

        function __construct($supplierId = null, $username = null, $password = null){

            $this->supplierId = $supplierId;
            $this->username   = $username;
            $this->password   = $password;

            $this->request     = $this->MarkabuRequest();
            $this->marketplace = $this->MarkabuMarketplace();
        }

        public function MarkabuMarketplace(){
            return new MarkabuMarketplace($this->supplierId, $this->username, $this->password);
        }

        public function MarkabuRequest(){
            return new MarkabuRequest($this->supplierId, $this->username, $this->password);
        }

    }