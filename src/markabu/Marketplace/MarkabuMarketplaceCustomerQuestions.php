<?php

    namespace Hasokeyk\Markabu\Marketplace;

    use Hasokeyk\Markabu\MarkabuRequest;

    class MarkabuMarketplaceCustomerQuestions{

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

        public function product(){
            return new MarkabuMarketplaceProducts($this->supplierId, $this->username, $this->password);
        }

        public function get_my_customer_questions($filter){
            $url                 = 'https://api.markabu.com/v1/sapigw/suppliers/'.$this->supplierId.'/questions/filter';
            $required_query_data = [
                'barcode'            => null,
                'page'               => null,
                'size'               => null,
                'supplierId'         => $this->supplierId,
                'endDate'            => null,
                'startDate'          => null,
                'status'             => 'WAITING_FOR_ANSWER',
                'orderByField'       => 'CreatedDate',
                'orderByDirection'   => 'DESC',
                'shipmentPackageIds' => null,
            ];
            $required_query_data = array_merge($required_query_data, $filter);
            $new_url             = http_build_query($required_query_data);

            $result = $this->request()->get($url.'?'.$new_url);
            return $result;
        }

        public function answer_customer_question($question_id = null, $answer = null){
            $url = 'https://api.markabu.com/v1/sapigw/suppliers/'.$this->supplierId.'/questions/'.$question_id.'/answers';

            $post_data = [
                'text' => $answer,
            ];

            $result = $this->request()->post($url, $post_data);
            return $result;
        }

        public function get_product_question_web($barcode = null){

            if($barcode != null){
                $product_info = $this->product()->get_my_product($barcode);

                var_dump($product_info);

                if(isset($product_info->content[0])){
                    $product_content_id = $product_info->content[0]->productContentId;
                    $url = 'https://public-mdc.markabu.com/discovery-web-socialgw-service/api/questions/answered/filter?page=0&storefrontId=1&culture=tr-TR&sellerId='.$this->supplierId.'&contentId='.$product_content_id;
                    $body = $this->request()->get($url);
                    return $body;
                }
            }

            return false;
        }

    }