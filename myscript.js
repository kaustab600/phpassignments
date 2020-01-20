
function OnBlurInput () {
			
			var str1 = document.getElementById("first").value;
			var str2 = document.getElementById("second").value;
			document.getElementById('full').value= str1.concat(" ",str2);

        }

 function func(){
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


