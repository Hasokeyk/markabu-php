<?php

    namespace Hasokeyk\Markabul\Marketplace;

    use Hasokeyk\Markabul\MarkabulRequest;

    class MarkabulMarketplace{

        public $supplierId;
        public $username;
        public $password;

        function __construct($supplierId = null, $username = null, $password = null){
            $this->supplierId = $supplierId;
            $this->username   = $username;
            $this->password   = $password;
        }

        public function MarkabulRequest(){
            return new MarkabulRequest($this->supplierId, $this->username, $this->password);
        }

        public function MarkabulMarketplaceCategories(){
            return new MarkabulMarketplaceCategories($this->supplierId, $this->username, $this->password);
        }

        public function MarkabulMarketplaceProducts(){
            return new MarkabulMarketplaceProducts($this->supplierId, $this->username, $this->password);
        }

        public function MarkabulMarketplaceBrands(){
            return new MarkabulMarketplaceBrands($this->supplierId, $this->username, $this->password);
        }

        public function MarkabulMarketplaceShipment(){
            return new MarkabulMarketplaceShipment($this->supplierId, $this->username, $this->password);
        }

        public function MarkabulMarketplaceAddresses(){
            return new MarkabulMarketplaceAddresses($this->supplierId, $this->username, $this->password);
        }

        public function MarkabulMarketplaceOrders(){
            return new MarkabulMarketplaceOrders($this->supplierId, $this->username, $this->password);
        }

        public function MarkabulMarketplaceCustomerQuestions(){
            return new MarkabulMarketplaceCustomerQuestions($this->supplierId, $this->username, $this->password);
        }

    }