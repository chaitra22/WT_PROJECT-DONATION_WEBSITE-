<?php
require 'conn.php';
echo '<pre>'; print_r($_POST) ;
$q="INSERT INTO `payment_laser`(`payment_id`, `order_id`, `signature_hash`) VALUES ('".$_POST['razorpay_payment_id']."','".$_POST['razorpay_order_id']."','".$_POST['razorpay_signature']."')";
$query=mysqli_query($con,$q);

if($query){
    echo "done successssssiiiiiiiiiiiiiii";
}
else{
    echo "SORRRyyyyyyyyyyyyyyyyy";
};
?>