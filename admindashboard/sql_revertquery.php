 <?php 
  
ob_start();
 

      require('class/configdb.php');
  include("functions/sanitize.php");
 
 
 

        $transaction_number =   $_GET['transaction_number'];
       
       $amount=  $_GET['amount'];
         $memberusename= $_GET['username'];
 
 
 $sql="SELECT amount_trade FROM tbl_trade_fund where username = '$memberusename'";
$result=mysqli_query($conn,$sql);
// Associative array
$row=mysqli_fetch_assoc($result);

$amountfortrade = $row["amount_trade"];

 
 
 $newtradefund =  $amountfortrade - $amount;


 $update_query = "UPDATE tbl_receipts SET approval_status ='2' WHERE username='$memberusename' and transaction_number = '$transaction_number'";

if (mysqli_query($conn,$update_query)) {  

            } else {
               echo "Error: " . $update_query . "" . mysqli_error($conn);
            }


  $update_queryfund = "UPDATE  tbl_trade_fund SET amount_trade = '$newtradefund' WHERE username='$memberusename'";
if (mysqli_query($conn,$update_queryfund)) {
}else {
     echo "Error: " . $update_queryfund . "" . mysqli_error($conn);
}


?>

 
  <script language="javascript">
            alert ("Receipt Submission Reverted");
window.location.href = 'index.php';

  </script>

<?php

 
   $conn->close();

 
 

 

?>