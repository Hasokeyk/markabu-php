<?php

    namespace Hasokeyk\Markabu\Marketplace;

    use Hasokeyk\Markabu\MarkabuRequest;

    class MarkabuMarketplace{

        public $supplierId;
        public $username;
        public $password;

        function __construct($supplierId = null, $username = null, $password = null){
            $this->supplierId = $supplierId;
            $this->username   = $username;
            $this->password   = $password;
        }

        public function MarkabuRequest(){
            return new MarkabuRequest($this->supplierId, $this->username, $this->password);
        }

        public function MarkabuMarketplaceCategories(){
            return new MarkabuMarketplaceCategories($this->supplierId, $this->username, $this->password);
        }

        public function MarkabuMarketplaceProducts(){
            return new MarkabuMarketplaceProducts($this->supplierId, $this->username, $this->password);
        }

        public function MarkabuMarketplaceBrands(){
            return new MarkabuMarketplaceBrands($this->supplierId, $this->username, $this->password);
        }

        public function MarkabuMarketplaceShipment(){
            return new MarkabuMarketplaceShipment($this->supplierId, $this->username, $this->password);
        }

        public function MarkabuMarketplaceAddresses(){
            return new MarkabuMarketplaceAddresses($this->supplierId, $this->username, $this->password);
        }

        public function MarkabuMarketplaceOrders(){
            return new MarkabuMarketplaceOrders($this->supplierId, $this->username, $this->password);
        }

        public function MarkabuMarketplaceCustomerQuestions(){
            return new MarkabuMarketplaceCustomerQuestions($this->supplierId, $this->username, $this->password);
        }

    }