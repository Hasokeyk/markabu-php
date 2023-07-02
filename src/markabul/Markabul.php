<?php

    namespace Hasokeyk\Markabul;

    use Hasokeyk\Markabul\Marketplace\MarkabulMarketplace;

    class Markabul{

        public $supplierId;
        public $username;
        public $password;

        public $marketplace;
        public $request;

        function __construct($supplierId = null, $username = null, $password = null){

            $this->supplierId = $supplierId;
            $this->username   = $username;
            $this->password   = $password;

            $this->request     = $this->MarkabulRequest();
            $this->marketplace = $this->MarkabulMarketplace();
        }

        public function MarkabulMarketplace(){
            return new MarkabulMarketplace($this->supplierId, $this->username, $this->password);
        }

        public function MarkabulRequest(){
            return new MarkabulRequest($this->supplierId, $this->username, $this->password);
        }

    }