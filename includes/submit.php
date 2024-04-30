<?php include "index.html"; ?>

<?php 
if(isset($_POST['submit'])) 
{ 
$to= "martel.amanda00@gmail.com"; 
$subject= "Message to Amanda Martel"; 
$msg= $_POST["value1"]; //textarea value will be send as message here. 
$header= " " //For example: From: abc@xyz.com 
mail($to,$subject,$msg,$header); 
} 
?>