<?php
$name=$_REQUEST['t'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['message'];

if(empty($name)|| empty($email) || empty(message))
{
	echo "please fill all the fields";
}
else
{
	mail("anjana.a.bhave@gmail.com", "kalaprangan inquiry", $message, "from: $name <$email>");
	echo "<script type='text/javascript'> alert('your message send succesfully');
	window.history.log(-1);

	 </script>";
}







?>