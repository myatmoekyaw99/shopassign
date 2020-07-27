<?php
    class DiscountRate
    {
        public static $serviceDiscountSliver = 0.1;
        public static $serviceDiscountGold = 0.15;
        public static $serviceDiscountPremium = 0.2;
        
        public static $productDiscountSilver = 0.1;
        public static $productDiscountGold = 0.1;
        public static $productDiscountPremium = 0.1;
        
        public static function getServiceDiscountRate($memberType)
        {
            switch($memberType){
                case 'Premium' : 
                    $sdr = self::$serviceDiscountPremium;
                    return $sdr;
                    break;

                case 'Gold' :
                    $sdr = self::$serviceDiscountGold;
                    return $sdr;
                    break;

                case 'Silver' :
                    $sdr = self::$serviceDiscountSliver; 
                    return $sdr;
                    break;
                    
                default :
                    echo 'No Service Discount';
            }
        }
        
        public static function getProductDiscountRate($memberType)
        {
            switch($memberType){

                case 'Premium' : 
                    $pdr = self::$productDiscountPremium;
                    return $pdr;
                    break;

                case 'Gold' :
                    $pdr = self::$productDiscountGold;
                    return $pdr;
                    break;

                case 'Silver' :
                    $pdr = self::$productDiscountSilver; 
                    return $pdr;
                    break;
                    
                default :
                    echo 'No Product Discount!';
            }
        }

        function showDiscountInfo($pdr,$sdr){
            echo "Product discount rate is {$pdr} and Service discount rate is {$sdr}.<br>";
        }
     }



?>