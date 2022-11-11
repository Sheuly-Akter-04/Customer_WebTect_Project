		function isValid(){
			
			var valid = true;
			var hpref=document.forms["adding"]["hpref"].value;
			var rpref=document.forms["adding"]["rpref"].value;
			var rcin=document.forms["adding"]["rcin"].value;
			var rcout=document.forms["adding"]["rcout"].value;
			var tpref=document.forms["adding"]["tpref"].value;
			var ttime=document.forms["adding"]["ttime"].value;
			
			
			if(hpref==="")
			{
				valid = false;
				document.getElementById('hprefErr').innerHTML=" Field cannot be empty";
				
			}

			if(rpref==="")
			{
				valid = false;
				document.getElementById('rprefErr').innerHTML=" Field cannot be empty";
				
			}

			if(rcin==="")
			{
				valid = false;
				document.getElementById('rcinErr').innerHTML= " Field cannot be empty";
				
			}

			if(rcout==="")
			{
				valid = false;
				document.getElementById('rcoutErr').innerHTML=" Field cannot be empty";
				
			}

			if(tpref==="")
			{
				valid = false;
				document.getElementById('tprefErr').innerHTML=" Field cannot be empty";

			}

			if(ttime==="")
			{
				valid = false;
				document.getElementById('ttimeErr').innerHTML=" Field cannot be empty";
			
			}

			
			
			return valid;
		}
