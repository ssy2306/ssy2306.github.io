<?php
//gettig the data from the form
if($_SERVER["REQUEST_METHOD"]=="POST")
$email=test_input($_POST['Email']);
$name=test_input($_POST['Name']);
$subject = test_input($_POST["Subject"]);
$message = test_input($_POST["Message"]);
$query = test_input($_POST["Query"]);
$to='2028133@gmail.com';
$txt ="Name = ".$name."\r \n Email= ". $email . "\r \c Subject= ".$subject . "\r \n Message= ". $message . "\r \n Querry= ". $query;
$headers = "From : https://ssy2306.github.io/HTML/index/homepage.html";
if($email!=NULL){
    mail($to, $subject, $txt, $headers);
    header("Location: thankyou.html");
}
//redirected
?>