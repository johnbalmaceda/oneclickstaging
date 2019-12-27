<?php 
	require_once("../class/configdb.php");
	require_once("../class/connection.php");
	$r = new mysql($mysqlvars);  
	  
		 $PINFROM = $_GET['pinfrom'];
		 $PINTO = $_GET['pinto'];
		 $usercodes = $_GET['usercode'];
		 $userfrom = $_GET['userfrom'];
		 $userto = $_GET['userto'];
		 $referralfrom = $_GET['referralfrom'];
		 $referralto = $_GET['referralto'];
		 $yesupline = $_GET['yesupline'];
		
		  
		 	$row = mysql_query("SELECT count(pin) as pincount FROM HPWPIN WHERE serial between '$PINFROM' and '$PINTO' ");
			$row = mysql_fetch_array($row);		
			$pincount = $row['pincount']; 	 
			
		 
		  
		  if (isset($_POST['accept']))
		   { 
				 
	     $lastname = $_POST['lastname'];
		 $firstname = $_POST['firstname'];
		 $middlename = $_POST['middlename'];
		 $password = $_POST['password']; 
		 $mainupline = $_POST['rhid'];

			$usercode = $_POST['usercode'];
			$referral = $_POST['referral'];
			$pin = $_POST['pin'];				
			
			for($i = 0; $i < count($usercode); $i++){	 				
		/*check sponsor exist*/	
  	     $total2 = mysql_query("SELECT COUNT(*) FROM hpwmembers WHERE rhid = '$referral[$i]'"); 
		 $total2 = mysql_fetch_array($total2);
   	    // echo "$total2[0]";	  
		 
	
 	     if ( $total2[0] > 0 ) {		
            /*check if account is exist*/
            $total = mysql_query("SELECT COUNT(*) FROM hpwmembers WHERE rhid = '$usercode[$i]'"); 
            $total = mysql_fetch_array($total); 
	//	echo "$total[0]";	  

            if ( $total[0] > 0 ) {		 
				
				echo $err =  $usercode[$i] . ' is already exist, please try again' . '<br>'  ;  
			  
            } else {	 
			   $totalci = mysql_query("SELECT COUNT(*) FROM HPWPIN WHERE PIN='$pin[$i]'"); 
               $totalci = mysql_fetch_array($totalci); 	 
			//   echo "$totalci[0]";	
			   if ( $totalci[0] > 0 ) {	
               	  $row = mysql_query("SELECT PIN FROM HPWPIN WHERE PIN = '$pin[$i]'");
                  $row = mysql_fetch_array($row);				      
				  $tpin = $row[0];
		 
				  $xded = $pamt;	
				 if ( $tused == 'Y'  ) {		
                      $err = "Either Code is used or invalid, please try again."; 
				 	 				 
                 } else {	
				       
				   if ($frname == '' && $lname == '' && $password =='')
				   {
					  echo $err = "Your Session Has Timed Out, Please Relogin Your Account Again.";    
					   return false;  
				   }  	
				   else{ 
					   
	
		
		
	 $tref =  mysql_query("SELECT count(*) as totalreferred FROM hpwmembers WHERE sponsorid LIKE '$mainupline'");   
	 $tref = mysql_fetch_array($tref); 	
	 $treftots = $tref[0]; 
		 
  	 $total2ndL =  mysql_query("SELECT sponsorid FROM  `hpwmembers` WHERE  rhid LIKE  '$mainupline' LIMIT 0 , 1");
	 $total2ndL = mysql_fetch_array($total2ndL); 	
	 $total2ndL1 = $total2ndL[0];  
  
     $total3rdL =  mysql_query("SELECT sponsorid FROM  `hpwmembers` WHERE  rhid LIKE  '$total2ndL1' LIMIT 0 , 1");
	 $total3rdL = mysql_fetch_array($total3rdL); 	
	 $total3rdL1 = $total3rdL[0];
	 
	 $total4thL =  mysql_query("SELECT sponsorid FROM  `hpwmembers` WHERE  rhid LIKE  '$total3rdL1' LIMIT 0 , 1");
	 $total4thL = mysql_fetch_array($total4thL); 	
	 $total4thL1 = $total4thL[0];
	 
	 $total5thL =  mysql_query("SELECT sponsorid FROM  `hpwmembers` WHERE  rhid LIKE  '$total4thL1' LIMIT 0 , 1");
	 $total5thL = mysql_fetch_array($total5thL); 	
	 $total5thL1 = $total5thL[0];
 
	$rebatesAmount = 5; 
 
  
 $query1=mysql_query("call insertRBlevel('$usercode[$i]', '$mainupline','$rebatesAmount',now())");
 $query2=mysql_query("call insertRBlevel('$usercode[$i]', '$total2ndL1','$rebatesAmount',now())");
 $query3=mysql_query("call insertRBlevel('$usercode[$i]', '$total3rdL1','$rebatesAmount',now())");
 $query4=mysql_query("call insertRBlevel('$usercode[$i]', '$total4thL1','$rebatesAmount',now())");
 $query5=mysql_query("call insertRBlevel('$usercode[$i]', '$total5thL1','$rebatesAmount',now())");

 
 
   $query=mysql_query("call InsertUser2('$usercode[$i]', '$password', '$lastname', '$firstname', '$referral[$i]', now(),'$middlename', '$pin[$i]')");
		  
						 //	$strSQLUpdates = "update hpwmembers set sponsored = sponsored + 1 where rhid='$referral[$i]'";
						 //	mysql_query($strSQLUpdates); 
						 //	$totals = mysql_query("SELECT COUNT(sponsorid) FROM hpwmembers WHERE sponsorid = '$referral[$i]'"); 
						//	$totals = mysql_fetch_array($totals);  
							 
							//  if ( $totals[0] == 2 ) {	 
						//	 $strSQLUpdatessss = "update HPWPIN  set USED='Y' , DATEUSE=now(),  USERNAME = '$usercode[$i]' where PIN='$pin[$i]';";
						 //	mysql_query($strSQLUpdatessss); 
								
							 	
							// 	$strSQLUpdatesss = "update hpwmembers set bluetag = 'A', actD =  DATE_ADD(now(),INTERVAL 6 DAY) where rhid='$referral[$i]' ";
							 //	mysql_query($strSQLUpdatesss); 
								 
						//	  } 
							   
					 //	$strSQLUpdatess = "update HPWPIN set USED='Y', DATEUSE=now() ,  USERNAME = '$usercode[$i]'  where PIN='$pin[$i]';";
						//  	mysql_query($strSQLUpdatess); 
							
							echo $err =  $usercode[$i] . ' has been successfully submitted ' . '<br>'  ;  
					   
				   }
				    
					
                 } //invalid code
               } else {	 
			   
					 
					echo $err = $pin[$i] . ' Code does not exist, please try again.' . '<br>';   
				   return false;
		 
			   }  
			}	            
				
	     } else {
          
		   echo $err = $referral[$i] . ' Referral does not exist, please try again.' . '<br>';    
			
			   return false;
			    
				
	     }
         /*end cond sponsor exist*/	
		
				 
				}	 
  
		   }
		  
	  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<title> </title>

<!-- Bootstrap Core CSS -->
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

<!-- Timeline CSS -->
<link href="../dist/css/timeline.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
<script src="//cdn.datatables.net/plug-ins/3cfcc339e89/sorting/title-numeric.js"></script>
<link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css">
<style type="text/css" class="init"></style>
<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" class="init">
	
 


	</script>  
</head>

<body  > 

 
 

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <a class="navbar-brand" href="index.php"><img src="../images/logo.png" width="210"></a> </div>
  <!-- /.navbar-header -->
  
  <ul class="nav navbar-top-links navbar-right">
    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
      <ul class="dropdown-menu dropdown-user">
        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a> </li>
        <li class="divider"></li>
        <li><a href="../index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a> </li>
      </ul>
      <!-- /.dropdown-user --> 
    </li>
    <!-- /.dropdown -->
  </ul>
  <!-- /.navbar-top-links -->
  
 
  <!-- /.navbar-static-side --> 
</nav>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12" style="padding-top:10px;">
      <div class="alert alert-<?php echo $note?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $err?> </div>
    </div>
    <!-- /.col-lg-12 --> 
  </div>
  <div class="row">
    <div class="col-lg-12" style="padding-top:10px; float:left;">
    
   
      <form   enctype="multipart/form-data" action="" method="post">
	   <div class="form-group">
            <label>main usercode</label>
            <input class="form-control" name="rhid" required placeholder="usercode here">
          </div>
	      <div class="form-group">
            <label>firstname</label>
            <input class="form-control" name="firstname" required placeholder="firstname here"  >
          </div>
		  <div class="form-group">
            <label>lastname</label>
            <input class="form-control" name="lastname" required placeholder="lastname here"  >
          </div>
		  <div class="form-group">
            <label>middlename</label>
            <input class="form-control" name="middlename" required placeholder="middlename here"  >
          </div>
		  <div class="form-group">
            <label>password</label>
            <input type="password" class="form-control" name="password" required   >
          </div>  
        
        <div class="form-group">
         
		  
          <div class="col-lg-3"> 
		  <p>usercode</p>
            <select  name="usercode[]"  multiple="multiple" class="form-control">
              <?php 
				 for ($x =   $userfrom; $x <=   $userto; $x++) {
						$fullcode = $usercodes . $x; 
				 ?>
                <option selected value="<?php echo $fullcode?>"> <?php echo $fullcode?></option>
                <?php } ?>
            </select> 
          </div> 
		  <div class="col-lg-3"> 
		  <p>referral</p>
            <select  name="referral[]"  multiple="multiple" class="form-control">
              <?php 
				 for ($x =   $referralfrom; $x <=   $referralto; $x++) {
						$fullcode = $usercodes . $x;
					
				 ?>
                <option selected value="<?php echo $fullcode?>"> <?php echo $fullcode?></option>
				<option selected value="<?php echo $fullcode?>"> <?php echo $fullcode?></option>
                <?php } ?>
            </select>
          
          </div>
		  
		   <div class="col-lg-3">
		  <p><?php echo $pincount?></p>
            <select  name="pin[]"  multiple="multiple" class="form-control">
              <?php 
				
 		$totalblue = "SELECT *  FROM HPWPIN WHERE   serial between '$PINFROM' and '$PINTO'  ORDER BY SERIAL ASC";  
		$sel2 = new mysql($mysqlvars);
		$sel2->select($totalblue);
		$selrows2 = $sel2->recs(); 	 
		for ($a=0;$a < count($selrows2);$a++) { 
   		        $PIN = $selrows2[$a]['PIN']; 
				 ?>
              <option selected value="<?php echo $PIN?>"> <?php echo $PIN?></option>
              <?php } ?>
            </select>
          
          </div>
		  
		  
		  
        </div>
          <div class="col-lg-6">
        <div class="form-group"><br>
<br>
        		<input type="submit" class="btn btn-primary" value="Accept" name="accept">
        </div>
        </div>
      </form>
    </div>
    <!-- /.col-lg-12 --> 
  </div>
</div>
<!-- /.row --> 
<!-- /#page-wrapper -->

</div>

<!-- /#wrapper --> 

<!-- Metis Menu Plugin JavaScript --> 
<script type="text/javascript" src="../bower_components/metisMenu/dist/metisMenu.min.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> 

<!-- Metis Menu Plugin JavaScript --> 
<script type="text/javascript" src="../bower_components/metisMenu/dist/metisMenu.min.js"></script> 

<!-- DataTables JavaScript --> 

<!-- Custom Theme JavaScript --> 
<script type="text/javascript" src="../dist/js/sb-admin-2.js"></script> 
<script src="../dist/js/jquery.currency.js"></script>
</body>
</html>
