<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
        <body>
    
            <div class="container">
                <h2>Shop</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="form-group">
                        <label for="n">Name:</label>
                        <input type="text" class="form-control" id="n" placeholder="Enter name.." name="n">
                    </div>

                    <div class="form-group">
                        <label for="">Member Type</label>
                            <select name="type" class="form-control">
                                <option selected disabled>Choose Your Member Type</option>
                                <option value="Silver">Silver Member</option>
                                <option value="Gold">Gold Member</option>
                                <option value="Premium">Premium Member</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="sn">Shop Name:</label>
                        <input type="text" class="form-control" id="sn" placeholder="Enter Shop name.." name="sn">
                    </div>

                    <div class="form-group">
                        <label for="color">Date:</label>
                        <input type="date" class="form-control" id="color" placeholder="Enter date..." name="date">
                    </div>

                    <div class="form-group">
                        <label for="pexp">Product Expense :</label>
                        <input type="text" name="pexp" id="pexp" class="form-control" placeholder="Enter product expense....">
                    </div>
                               
                    <div class="form-group">
                        <label for="sexp">Service Expense :</label>
                        <input type="text" name="sexp" id="sexp" class="form-control" placeholder="Enter service expense....">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    
                </form>
            </div>
        <hr>

        <?php

            include 'discount.php';
            include 'customer.php';
            include 'shopclass.php';

            if(isset($_POST['submit'])){
                $name=$_POST['n'];
                $type=$_POST['type'];
                $shopn=$_POST['sn'];
                $date=$_POST['date'];
                $pex=$_POST['pexp'];
                $sexp=$_POST['sexp'];

                $cust=new Customer($name,$type);
                $cust->isMember();
                
                $sdr = $cust->getServiceDiscountRate($type);
                $pdr = $cust->getProductDiscountRate($type);
                $cust->showDiscountInfo($pdr,$sdr);

                $shopp=new Shop($shopn,(string)$date,$pex,$sexp);
                $t = $shopp->totalExpense($pdr,$sdr);
                $shopp->setTexpnese($t);
                $total = $shopp->shopInfo($cust);
                
               // echo "Total Expense is $ {$total}.";

            }


        ?>

        </body>
</html>
