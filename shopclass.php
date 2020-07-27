<?php
    class Shop extends Customer{

        public $name,$date;

        public function __construct($name,$date,$pexp,$sexp){
            $this->name=$name;
            $this->date=$date;
            $this->pexpense=$pexp;
            $this->sexpense=$sexp;
        }

        function totalExpense($pdr,$sdr) {
            $npe = $this->pexpense * $pdr;
            $nse = $this->sexpense * $sdr;
            $res = $npe+$nse;
            return $res;
        }
        function setTexpnese($t){
            $this->texp=$t;
        }

        function shopInfo($cust){
            echo "<table class='table table-dark table-hover'>";
            echo "<thead class='thead-light'><tr><th>Customer Name</th><th>Member Type</th><th>Shop</th><th>Date</th><th>Product Expense</th><th>Service Expense</th><th>Total Expense</th></tr></thead>";
            echo "<tbody><tr>";
            $cust->toString();
            echo "<td>$this->name</td><td>$this->date</td><td>$this->pexpense</td><td>$this->sexpense</td>";
            echo "<td>$this->texp</td>";
            echo "</tr></tbody>";
        }
    }
?>