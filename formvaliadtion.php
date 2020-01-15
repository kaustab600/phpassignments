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

		

	</script>

	<style type="text/css">
		/*#validatorform{
			text-align: center;
			transform: translateY(50%);
		}*/

		.validator{
			display:block;
			margin: 10px;

		}

	   /* .validator input{
			margin-left: 20px;
		}

		.validator:nth-child(2){
			
			padding-left: 16px;
		}

		.validator:nth-child(2) input{
			margin-left: 25px;


		}

		.validator:nth-child(3){
			padding-right: 5px;
			margin-right: 5px;
		}

		#validatorform{
			width:500px;
			height: 20vh;
			margin-left: 30%;
			padding-top: 30px;
		}

		*/
				
		#form1{
			padding: 10px;
			
		}




	</style>
   <!-- <script type="text/javascript">
		function allLetter(inputtxt1 ,inputtxt2 )
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt1.value.match(letters) && inputtxt2.value.match(letters))
      {
      alert('Your name have accepted : you can try another');
      /*<?php //header("Location:http://localhost/sample.php"); ?>*/
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
      }
	</script>-->
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
		Firstname:<input type="text" name="firstname" id="first" pattern="[a-zA-Z ]{1,}" required onkeyup="OnBlurInput()"/>
	</div>

	<div class="validator">
	Lastname:<input type="text" name="secondname" id="second" pattern="[a-zA-Z ]{1,}" required  onkeyup="OnBlurInput()"/>
    </div>

    <div class="validator">
	Fullname:<input type="text" disabled="true" id="full" />
    </div>


    <div class="validator">
     <input type="file" name="ff">

    </div>


    <div class="validator">
    	<textarea cols="20" rows= "5" name="subjectmarks">
    		
    	</textarea>
    </div>


    <div class="validator">
	<input type="submit" name="submit" value="submit">
    </div>

    

    </div>

    

    
	
</form>

</body>



</html>