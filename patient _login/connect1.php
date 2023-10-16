<?php
// Establish a database connection (replace with your database credentials)
$db_host = "localhost";
$db_user = "root";
$db_pass= "";
$db_name = "health_companion_app";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: ");
}

// Retrieve form data
if(isset($_POST["submit"])){
$Name=$_POST["Name"];
$gender = $_POST["gender"];
$age= $_POST["age"];
$Username=$_POST["Username"];
$EmailID = $_POST["EmailID"];
$Password = $_POST["Password"];
$ConfirmPassword = $_POST["ConfirmPassword"];
$PhoneNumber = $_POST["PhoneNumber"];
$WorkExperience = $_POST["WorkExperience"];
$Hospitalyouarecurrentlyworkingin=$_POST["Hospitalyouarecurrentlyworkingin"];
$YourSpecialization=$_POST["YourSpecialization"];
$Nameofthecollageyoustudied=$_POST["Nameofthecollageyoustudied"];

// Insert data into the database
$sql = "INSERT INTO doctorregistration(Name,gender,age,Username,EmailID,Password,ConfirmPassword,PhoneNumber,WorkExperience,Hospitalyouarecurrentlyworkingin,YourSpecialization,Nameofthecollageyoustudied)
        VALUES ('$Name', '$gender',$age,'$Username', '$EmailID','$Password','$ConfirmPassword',$PhoneNumber,$WorkExperience,'$Hospitalyouarecurrentlyworkingin','$YourSpecialization','$Nameofthecollageyoustudied' )";

$result=mysqli_query($conn,$sql);

}
$strng= "Success! This page doesn't exist!";
echo '<span style="color: red; font-size: 50px;"> ' . $strng.  '</span>';

?>
