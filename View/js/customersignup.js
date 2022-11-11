		function isValid(){
			
			var valid = true;
			var fname=document.forms["reg"]["fname"].value;
			var lname=document.forms["reg"]["lname"].value;
			var dob=document.forms["reg"]["dob"].value;
			var gender=document.forms["reg"]["gender"].value;
			var nationality=document.forms["reg"]["nationality"].value;
			var password=document.forms["reg"]["password"].value;
			var username=document.forms["reg"]["username"].value;
			var phone=document.forms["reg"]["phone"].value;
			var email=document.forms["reg"]["email"].value;
			var paddress=document.forms["reg"]["paddress"].value;
			var peraddress=document.forms["reg"]["peraddress"].value;
			var websitelink=document.forms["reg"]["websitelink"].value;
			
			
			if(fname==="")
			{
				valid = false;
				document.getElementById('fnameErr').innerHTML=" Field cannot be empty";
				
			}

			if(lname==="")
			{
				valid = false;
				document.getElementById('lnameErr').innerHTML=" Field cannot be empty";
				
			}

			


			if(password==="")
			{
				valid = false;
				document.getElementById('passwordErr').innerHTML=" Field cannot be empty";
			
			}

			if(username==="")
			{
				valid = false;
				document.getElementById('usernameErr').innerHTML=" Field cannot be empty";
				
			}

			if(phone==="")
			{
				valid = false;
				document.getElementById('phoneErr').innerHTML=" Field cannot be empty";
			
			}

			if(email==="")
			{
				valid = false;
				document.getElementById('emailErr').innerHTML=" Field cannot be empty";
			
			}

			if(paddress==="")
			{
				valid = false;
				document.getElementById('paddressErr').innerHTML=" Field cannot be empty";
			
			}

			if(peraddress==="")
			{
				valid = false;
				document.getElementById('peraddressErr').innerHTML=" Field cannot be empty";
			
			}

			if(websitelink==="")
			{
				valid = false;
				document.getElementById('websitelinkErr').innerHTML=" Field cannot be empty";
				
			}

			
			return valid;
		}
