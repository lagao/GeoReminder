$("#message").click(function(){

	var message = $("#message").val();
	
	if(message =='')
	{
		alert("Please fill all fields...!!!!!!");
	}	
	else if((message.length)<1)
	{
		alert("Message should atleast 1 character in length...!!!!!!");
	}

	
	else 
	{
		$.post("register.php",{email1: email, password1:password},
			function(data) {
				if(data=='You have Successfully Registered.....')
				{
					$("form")[0].reset();
				}
				alert(data);
			});
	}
	
});


