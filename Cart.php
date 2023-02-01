<?php
    require_once "Medicine.php";
    require_once "Products.php";


    class Cart extends Medicine{
        private $cartItems = array();
    
        function addToCart($items){
            $this->cartItems[] = $items;
        }
        function viewCart(){
            foreach ($this->cartItems as $key => $x){
                echo 
                '
                <ul>
                    <li><b>Name:</b> ' . $x->getName() . '</li>
                    <li><b>Description:</b> ' . $x->getDescription() . '</li>
                    <li><b>Price:</b> ₱ ' . number_format($x->getPrice(), 2 ). '</li>
                    <li><b>Dose:</b> ' . $x->getDose() . '</li>
                    <li><b>Type:</b> ' . $x->getType() . '</li>
                    <li><b>Exp Date:</b> ' . $x->getExpirationDate() . '</li>
                    <li><b>SRP:</b> ₱ ' . number_format($x->computeSRP(),2) . '</li>
                </ul>
                <hr>';
            }
        }
        function computeTotal(){
            $total = 0;
            foreach($this->cartItems as $key => $x){
                $total += $x->computeSRP();
            }
            echo '<b>Total Cart Amount: </b> ₱ ' . number_format($total,2);
        }
    
    }

?>