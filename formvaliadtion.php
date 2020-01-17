<!DOCTYPE html>
<html>
<head>
	<title></title>
  

	<script type="text/javascript">
		/*function OnBlurInput(input){
				var a = document.getElementById("first");
				var b = document.getElementById("second");

				var c = a.concat(b);
				input.value = "hello";
		}*/

		function OnBlurInput () {
			var str1 = document.getElementById("first").value;
			var str2 = document.getElementById("second").value;
			var str3 = str1.concat(" ",str2);

            full.value = str3;
        }

        function func(){
			var validcharacters = /^[1-9][0-9]+$/;
			var str1 = document.getElementById('telno').value;
			if(telno.value.match(validcharacters))
			{		
			  var prefix = "+91";
			  var len = str1.length;
			
			if(len == 10)
			{
				telno.value = prefix + str1;
			}
			else
			{
				telno.value="";
				alert("please enter valid contactno with 10 digits");
			}
		   }

		  else
           {
      			alert('Please input numeric characters only');
      			//document.telephoneno.focus();
      			
      		}
		}

		function emailcheck()
		{
			//var pattern = /^\w*[-]?\w+@\w+(\.\w{2,3}){1,3}$/ ;
			var pattern = /^\w*[-]?\w+@\w+(\.\w{2,3}){1,3}$/;
			var inputtext = document.getElementById("emailid").value;
			if (!inputtext.match(pattern))
			{
				emailid.value = "";
				alert(" enter valid email");
				document.emailid.focus();

			}
			else
			{
				alert("successful email");
			}

		}

		

	</script>

	<style type="text/css">

		.validator{
			display:block;
			margin: 10px;

		}

	  
				
		#form1{
			padding: 10px;
			
		}

	

	</style>
  
</head>

<!--<?php
		   
	    /*    if (ctype_alpha($firstname) && ctype_alpha($secondname)) {
           
           
		   header("Location:http://localhost/sample.php");
            } 
          else {

            echo "Something's not right";
           }
      */

?>-->

<body>

	<div id="validatorform">
	<form  name="form1" id="form1" method="post" action="http://localhost/sample.php" enctype="multipart/form-data">
	<div class="validator">
		Firstname:<input type="text" name="firstname" id="first" pattern="[a-zA-Z ]{1,}" placeholder="enter Firstname" required onkeyup="OnBlurInput()"/>
	</div>

	<div class="validator">
	Lastname:<input type="text" name="secondname" id="second" placeholder="enter Lastname" pattern="[a-zA-Z ]{1,}" required  onkeyup="OnBlurInput()"/>
    </div>

    <div class="validator">
	Fullname:<input type="text" disabled="true" id="full" />
    </div>


    <div class="validator">
     <input type="file" name="ff">

    </div>


    <div class="validator">
    <textarea  name="subjectmarks" rows="6" cols="20" class="textpart" placeholder="enter subject|marks"></textarea>
    </div>

    <div class="validator">
    	ContactNo:<input type="text" name="telephoneno" id="telno" placeholder="enter valid  contactno" onblur="func()" value="" required>
    </div>


    <div class="validator">
    	emailid:<input type="text" id="emailid" name="emailid" placeholder="enter email id" onblur="emailcheck()" >
    	
    </div>

    <div class="validator">
	<input type="submit" name="submit" value="submit">
    </div>

    

    </div>

   <!-- <?php

    	/*$urlname = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    	echo $urlname;
    	if(strpos($urlname,"msg=false"))
    	{
    		echo " <pno image is present";
    	}*/

    ?>-->

    
	
</form>

</body>



</html>