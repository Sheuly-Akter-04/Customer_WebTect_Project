		function isValid(){
			
			var valid = true;
			var fname=document.forms["profile"]["fname"].value;
			var lname=document.forms["profile"]["lname"].value;
			var gender=document.forms["profile"]["gender"].value;
			var dob=document.forms["profile"]["dob"].value;
			var religion=document.forms["profile"]["religion"].value;
			var paddress=document.forms["profile"]["paddress"].value;
			var peraddress=document.forms["profile"]["peraddress"].value;
			var email=document.forms["profile"]["email"].value;
			var phone=document.forms["profile"]["phone"].value;
			
			
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
			if(gender==="")
			{
				valid = false;
				document.getElementById('genderErr').innerHTML=" Field cannot be empty";
				
			}

			if(dob==="")
			{
				valid = false;
				document.getElementById('dobErr').innerHTML= " Field cannot be empty";
				
			}

		
			if(religion==="")
			{
				valid = false;
				document.getElementById('religionErr').innerHTML=" Field cannot be empty";

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

			if(email==="")
			{
				valid = false;
				document.getElementById('emailErr').innerHTML=" Field cannot be empty";
			
			}

			if(phone==="")
			{
				valid = false;
				document.getElementById('phoneErr').innerHTML=" Field cannot be empty";
			
			}

			
			return valid;
		}
