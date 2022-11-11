		function isValid(){
			
			var valid = true;
			var passwordo=document.forms["adding"]["passwordo"].value;
			var password=document.forms["adding"]["password"].value;
			var passwordr=document.forms["adding"]["passwordr"].value;
			
			
			if(passwordo==="")
			{
				valid = false;
				document.getElementById('passwordoErr').innerHTML=" Field cannot be empty";
				
			}

			if(password==="")
			{
				valid = false;
				document.getElementById('passwordErr').innerHTML=" Field cannot be empty";
				
			}

			if(passwordr==="")
			{
				valid = false;
				document.getElementById('passwordrErr').innerHTML= " Field cannot be empty";
				
			}

			
			return valid;
		}
