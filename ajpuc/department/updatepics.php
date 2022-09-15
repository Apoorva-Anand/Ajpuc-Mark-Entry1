<?php
extract($_REQUEST);
include("dbconfig.php");

 

$type = explode('.', $_FILES['userImage']['name']);

    $type = $type[count($type) - 1];
    
   // if(!empty($type))
   // {


$url = "../img/faculty/$url.$type";

move_uploaded_file($_FILES['userImage']['tmp_name'], $url);
//if(empty( $highqual)=='')
$sql = "UPDATE faculty SET Fname='$Fname',Lname='$Lname',Email_ID='$Email_ID',url='$url',Add_1='$Add_1',Add_2='$Add_2',Pincode='$Pincode',Phone_No='$Phone_No',password='$password' where Fac_ID='$oldid'"; 
//else if($highqual=='')
//$sql = "UPDATE faculty SET name='$fname',Email_ID='$fcemail',url='$url',Add_1='$faddl1',Add_2='$faddl2',Pincode='$fpinc',Phone_No='$fnum',password='$fcpass' where Fac_ID='$oldid'"; 
    //}
    //  else 
//$sql = "UPDATE faculty SET name='$fname',Email_ID='$fcemail',url='$url',Add_1='$faddl1',Add_2='$faddl2',Pincode='$fpinc',Phone_No='$fnum',password='$fcpass',Qualification='$highqual' where Fac_ID='$oldid'"; 
// else
// $sql = "UPDATE faculty SET name='$fname',Email_ID='$fcemail',url='$url',Add_1='$faddl1',Add_2='$faddl2',Pincode='$fpinc',Phone_No='$fnum',password='$fcpass',Qualification='$highqual' where Fac_ID='$oldid'";
// }
// else
// {
// if($desig=='' && $highqual=='')
// $sql = "UPDATE faculty SET name='$fname',Email_ID='$fcemail',Add_1='$faddl1',Add_2='$faddl2',Pincode='$fpinc',Phone_No='$fnum',password='$fcpass' where Fac_ID='$oldid'"; 
// else if($highqual=='')
// $sql = "UPDATE faculty SET name='$fname',Email_ID='$fcemail',Add_1='$faddl1',Add_2='$faddl2',Pincode='$fpinc',Phone_No='$fnum',password='$fcpass' where Fac_ID='$oldid'"; 
// else if($desig=='')
// $sql = "UPDATE faculty SET name='$fname',Email_ID='$fcemail',$url',Add_1='$faddl1',Add_2='$faddl2',Pincode='$fpinc',Phone_No='$fnum',password='$fcpass',Qualification='$highqual' where Fac_ID='$oldid'"; 
// else
// $sql = "UPDATE faculty SET name='$fname',Email_ID='$fcemail',Add_1='$faddl1',Add_2='$faddl2',Pincode='$fpinc',Phone_No='$fnum',password='$fcpass',Qualification='$highqual' where Fac_ID='$oldid'";

// }


     
$result = $con->query($sql);

if($result == True ){
	echo "<script>window.location.assign('Faculty_List.php?upsuccess=true');</script>";
}
else{
	echo "<script>window.location.assign('Faculty_List.php?uperror=true');</script>";
}
?>














