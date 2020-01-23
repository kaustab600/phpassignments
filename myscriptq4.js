document.getElementById('telno').onblur = function func(){

			var validcharacters = /^(\+91)\d{10}$/;
			var validcharacters1 = /^\d{10}$/;
			var str1 = document.getElementById('telno').value;
			if(str1.match(validcharacters))
			{		
			  alert('contactno success');
			
		   }

		  else
           {	if(str1.match(validcharacters1))
           		{
      			alert('Please provide country code +91');
      			//document.telephoneno.focus();
      		    }

      		    else
      		    {
      		    	alert('please provide a valid 10 digit Contactno');
      		    }
      			
      		}
		
	}