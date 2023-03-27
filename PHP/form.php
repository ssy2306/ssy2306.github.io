<?php
//gettig the data from the form
$email=POST['Email']
$name=POST['Name']
$subject = $_POST["Subject"];
$message = $_POST["Message"];
$query = $_POST["Query"];
$to='2028133@gmail.com';
$txt ="Name = ".$name."\r \n Email= ". $email . "\r \c Subject= ".$subject . "\r \n Message= ". $message . "\r \n Querry= ". $query;
$headers = "From : https://ssy2306.github.io/HTML/index/homepage.html";
if($email!=NULL){
    mail($to, $subject, $txt, $headers);
    header("Location: thankyou.html");
}
//redirected
?>