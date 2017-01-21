<?php

$message=$_POST['message1'];


	$result = mysql_query("SELECT * FROM registration WHERE email='$email'");
        $data = mysql_num_rows($result);
	        
	if(($data)==0)
      {
		//Insert query 
	   $query = mysql_query("insert into message(message) values ('$message')");
		if($query)
		   {
			  echo "You have Successfully Submitted Message.....";
		   }
		else
		   {
			  echo "Error....!!";   
		   }
	} 
	else
	{
		echo "This email is already registered, Please try another email...";
	}  
 }
 
//connection closed
mysql_close ($connection);
?>