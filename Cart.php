<?php 
    require_once "Medicine.php";
    class Cart(){
        private $cartItems = [];

        function addToCart($cartItems){
            $this->cartItems = $cartItems;
        }
        function viewCart(){
            foreach ($this->cartItems as $value){
                echo $value."<br>";
            }
        }
        function computeTotal(){
            echo "<hr><br>";
            echo $this->srp;
        }
    }
?>