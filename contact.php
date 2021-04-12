<?php
 
/* Check required fields */
 
if($_POST['name']=="" || $_POST['email']=="" || $_POST['message']=="")
{
die ("Required field(s) are empty.");
}
/* Check name field */
else if(strlen($_POST['name']) < 3){
die ("Name should be more than 2 characters");
}
/* Check message field */
else if(strlen($_POST['message']) < 10){
die ("Message should be more than 9 characters");
}
 
 
$name = $_POST['name'];
$to = 'admin@linuxhint.com';
$from = $_POST['email'];
$subject = 'Inquiry';
$body = 'Hello,<br/><br/>'.$_POST['message'].'<br/><br/>Thanks, <br/>'.$name;
 
echo "To: ".$to."<br/>From: ".$from."<br/>Subject: ".$subject."<br/><hr><br/>".$body;
 
 
/*-------------Add code for sending email------------------ */
 
?>