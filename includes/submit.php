<?php include "index.html"; ?>

<?php 
if(isset($_GET['submit'])) 
{ 
$to= "martel.amanda00@gmail.com"; 
$subject= "Message to Amanda Martel"; 
$msg= $_GET["value1"]; //textarea value will be send as message here. 
$header= " " //For example: From: abc@xyz.com 
mail($to,$subject,$msg,$header); 
} 
?>