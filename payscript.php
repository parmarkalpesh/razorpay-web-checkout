<?php 
$apiKey = "rzp_test_4zeSwLtVElV0A3"
?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<form action="./done.php" method="POST">
<script
   src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey ?>" 
    data-amount="<?php echo $_POST['amount'] * 100 ?>" 
    data-currency="INR"
    data-order_id="<?php echo 'OID'.rand(10,100).'END';?>" 
    data-buttontext="Pay with Razorpay"
    data-name="Madhav Webservice"
    data-description="Web Designer Expert"
    data-image="https://imgur.com/zeLO8V7"
    data-prefill.name="<?php echo $_POST['name']?>"
    data-prefill.email="<?php echo $_POST['email']?>"
    data-prefill.contact="<?php echo $_POST['contact']?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form>