<?php

$connection =mysqli_connect('localhost', 'root', '', 'contact_dbb' );

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Branch = $_POST['Branch'];
    $message = $_POST['message'];
    $year = $_POST['year'];
    $EventName = $_POST['EventName'];
    $GroupName = $_POST['GroupName'];
    $Rollnumber = $_POST['Rollnumber'];
    $Section = $_POST['Section'];

    $request ="insert into contact_form(name,email,phone,Branch,message,year,EventName,Rollnumber,Section) values('$name','$email','$phone','$Branch','$message','$year','$EventName','$Rollnumber','$Section')";
    mysqli_query($connection, $request);
    header('location:index.php');

}else{
    echo 'Something went wrong please try again!';
}
?>