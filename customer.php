<?php
    class Customer extends DiscountRate{

        public $name,$memberType;

        public function __construct($name,$memberType){
            $this->name=$name;
            $this->memberType=$memberType;
        }

        function isMember() {
            if($this->memberType=="Premium") {
                echo "Customer is a Premium member.<br>";
            }else if($this->memberType=="Gold") {
                echo "Customer is a Gold member.<br>";
            }else if($this->memberType=="Silver") {
                echo "Customer is Silver member.<br>";
            }else{
                echo "Customer is not a member.<br>";
            }
    
        }

        function toString(){
            echo "<td>$this->name</td><td>$this->memberType</td>";
        }
    }
?>