<?php

require_once('connection.php');
$bookid=$_GET['id'];
$sql="SELECT *from booking where BOOK_Id=$bookid";
$result=mysqli_query($con,$sql);
$res = mysqli_fetch_assoc($result);
$vehicle_id=$res['VEHICLE_ID'];
$sql2="SELECT *from vehicles where VEHICLE_ID=$vehicle_id";
$vehicleres=mysqli_query($con,$sql2);
$vehicleresult = mysqli_fetch_assoc($vehicleres);
$email=$res['EMAIL'];
$vehiclename=$vehicleresult['VEHICLE_NAME'];
if($vehicleresult['AVAILABLE']=='Y')
{
if($res['BOOK_STATUS']=='APPROVED' || $res['BOOK_STATUS']=='RETURNED')
{
    echo '<script>alert("ALREADY APPROVED")</script>';
    echo '<script> window.location.href = "adminbook.php";</script>';
}
else{
    $query="UPDATE booking set  BOOK_STATUS='APPROVED' where BOOK_ID=$bookid";
    $queryy=mysqli_query($con,$query);
    $sql2="UPDATE vehicles set AVAILABLE='N' where VEHICLE_ID=$res[VEHICLE_ID]";
    $query2=mysqli_query($con,$sql2);
    
    echo '<script>alert("APPROVED SUCCESSFULLY")</script>';
    // $to_email = $email;
    // $subject = "DONOT-REPLY";
    // $body = "YOUR BOOKING FOR THE VEHICLE $vehiclename IS BEEN APPROVED WITH BOOKING ID : $bookid";
    // $headers = "From: sender email";
    
    // if (mail($to_email, $subject, $body, $headers))
    
    // {
    //     echo "Email successfully sent to $to_email...";
    // }
    
    // else

    // {
    // echo "Email sending failed!";
    // }
    echo '<script> window.location.href = "adminbook.php";</script>';
}  
}
else{
    echo '<script>alert("VEHICLE IS NOT AVAILABLE")</script>';
    echo '<script> window.location.href = "adminbook.php";</script>';
}


?>