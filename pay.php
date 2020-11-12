<?php
require 'conn.php';
require 'razorpay/Razorpay.php';

use Razorpay\Api\Api;

$keyID = 'rzp_test_Sa7p2ZG3dh0ejv';
$secretKey ='SUJ47hHaEuiW8IhKSKmCjXTu';
$api=new Api($keyID,$secretKey);

$donate_to = $_POST['donate_to'];
$donar_name=$_POST['donar_name'];
$donar_email=$_POST['donar_email'];
$donar_mobile=$_POST['donar_mobile'];
$donate_amount = $_POST['donate_amount'];
$q1="INSERT INTO `donation`(`donation_to`, `amount`, `donar_name`, `donar_email`) VALUES ('$donate_to','$donate_amount','$donar_name','$donar_email')";
$query1=mysqli_query($con,$q1);

$order = $api->order->create(array(
    'receipt' => rand(1000,9999).'ORD',
    'amount' => $donate_amount*100,
    'payment_capture' => 1,
    'currency' => 'INR',

));
?>

<meta name="viewport" content="width=device-width">
<form action="success.php" method="post">
        <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="<?php echo $keyID?>"
            data-amount="<?php echo $order->amount*100 ?>"
            data-currency="INR"
            data-order_id="<?php echo $order->id?>"
            data-buttontext="PAY WITH RAZORPAY"
            data-name="Myinboxhub"
            data-description="FOR DONATION"
            data-image="<?php echo 'https://myinboxhub.co.in/data/logo/logo.png';?>"
            data-prefill.name="<?php echo $donar_name; ?> "
            data-prefill.email="<?php echo $donar_email; ?> "
            data-prefill.contact="<?php echo $donar_mobile; ?> "
            data-theme.color="f0a43c">
        </script>
        <input type="hidden" custom="Hidden Element" name ="hidden">
</form>
            
            
            
            

