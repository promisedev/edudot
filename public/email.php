<?php
$date = date("Y");
$to = $email;
$subject = "User Confirmation Code";

$message = "
<html>
<head>
<title>Edudot Team</title>
</head>
<body>
<div style='width:40%; height:50px; background:rgb(242,248,250);
 margin-top: 5%; margin-left:5%; padding: 9px 0px 0px 10px; 
 color:rgb(128,116,5); font-family:calibri, arial;
 font-size:19px; border-radius:9px; margin-bottom:5%;'>
<p>Congratulation Payment Successful</p>
</div>
<div style='margin-left:5%; width: 40%'>
<p> use your User Confirmation Code(UCC) to apply for any scholarship 
at <a href='edudot.com'>edudot.com</a> </br></br>
<span style='font-family:calibri, arial;'><b>UCC</b>:</span>
<span style='font-family:calibri, arial; color:rgb(128,116,5)'>$ucc</span>
</div>
<div style='background:rgb(247,244,215);color:rgb(153,153,153);
height: 50px; text-align:center; margin-top:4%;'>
<span> edu&#9679; &copy; $date, all right reserved.</span>
</div>

</body>
</html>
";
//echo $message;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <kpali.promise@gmail.com>' . "\r\n";
$headers .= 'Cc: no_reply_edudot@gmail.com' . "\r\n";

 mail($to,$subject,$message,$headers);


?>