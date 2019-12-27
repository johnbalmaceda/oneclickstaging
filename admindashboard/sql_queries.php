 <?php 
  
ob_start();
$totalnew_fortrade =  $amountfortrade -  $trade_amount ;

$drlvl1 = $trade_amount * 0.05;
$drlvl2to10 = $trade_amount * 0.01;
 
 
 $ins_query_drbonus  = "INSERT into tbl_drbonuses (username_upline,username_downline,user_level,payin_date,payin_amount,bonus,status) values ('$sponsor','$username','1',now(),'$trade_amount', '$drlvl1','1' )";

if (mysqli_query($conn,$ins_query_drbonus)) {

 
            } else {
               echo "Error: " . $ins_query_drbonus . "" . mysqli_error($conn);
            }




?>