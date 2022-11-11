		function isValid(){
			
			var valid = true;
			var agencyreview=document.forms["adding"]["agencyreview"].value;
			var rating=document.forms["adding"]["rating"].value;
			
			
			if(agencyreview==="")
			{
				valid = false;
				document.getElementById('agencyreviewErr').innerHTML=" Field cannot be empty";
				
			}

			if(rating==="")
			{
				valid = false;
				document.getElementById('ratingErr').innerHTML=" Field cannot be empty";
				
			}

			
			return valid;
		}
