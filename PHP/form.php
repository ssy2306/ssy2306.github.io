<?php
//gettig the data from the form
if($_SERVER["REQUEST_METHOD"]=="POST")
$email=test_input($_POST['Email']);
$name=test_input($_POST['Name']);
$subject = test_input($_POST["Subject"]);
$message = test_input($_POST["Message"]);
$query = test_input($_POST["Query"]);
$body=$message;
$to='2028133@gmail.com';
$txt ="Name = $name  \n Email=  $email  \n Subject= $subject  \n Message=  $message \n Querry= $query";
$headers = "From :https://ssy2306.github.io/HTML/index/homepage.html";
if($email!=NULL){
   if(mail($to, $subject, $body)){
   echo "Thankyou";
   } else{
    echo "Error Occured";
   }
} else{
    echo "Error Occured";
   }
//redirected
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>