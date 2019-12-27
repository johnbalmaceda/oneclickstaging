
<?php
    $query = "SELECT username,lname,fname,mi,gender,referred_by FROM tbl_profile WHERE username='$username'";
        $result = mysqli_query($conn,$query) ;
        $rows = mysqli_fetch_assoc($result);
        $username = $rows["username"];
        $lastname = $rows["lname"];
        $firstname  = $rows["fname"];
        $middle  = $rows["mi"];
        $gender  = $rows["gender"];

        $sponsor  = $rows["referred_by"];




         $querytotalmembers = "SELECT COUNT(*) as totalactive FROM tbl_profile WHERE account_status = '1' and accesslevel = '0'";
        $result = mysqli_query($conn,$querytotalmembers) ;
        $rows = mysqli_fetch_assoc($result);
        $totalactive = $rows["totalactive"];
        

?>