<?php
    require_once "Products.php";

    class Medicine extends Products {
        private $dose;
        private $type;
        private $expirationDate;

        function setDose($dose){
            $this->dose = $dose;
        }
        function setType($type){
            $this->type = $type;
        }
        function setExpirationDate($expirationDate){
            $this->expirationDate = $expirationDate;
        }
        function getDose(){
            echo $this->dose;
        }
        function getType(){
            echo $this->type;
        }
        function getExpirationDate(){
            echo $this->expirationDate;
        }
        function computeSRP(){
            ($this->price * 2) + $this->srp = $this->srp;
        }
    }

?>