		function isValid(){
			
			var valid = true;
			var username=document.forms["adding"]["username"].value;
			var password=document.forms["adding"]["password"].value;
			
			
			if(username==="")
			{
				valid = false;
				document.getElementById('usernameErr').innerHTML=" Field cannot be empty";
				
			}

			if(password==="")
			{
				valid = false;
				document.getElementById('passwordErr').innerHTML=" Field cannot be empty";
				
			}

			
			return valid;
		}
