
<?php

if(isset($_POST['submit']))
{
	$email = $_POST['emailid'];

	if(!preg_match('/^\w*[-]?\w+@\w+(\.\w{2,3}){1,3}$/',$email ))
	{
		echo "<script type='text/javascript'>alert('INVALID email');</script>";
	}

	else
	{
		echo "<script>alert('email Success');</script>";
          		//echo "inside mailboxlayer api script";
    echo " email : ".$email;
				// set API Access Key
				$access_key = '9c117789243c894c0d837e1e0cfc4c7f';

				// set email address
				$email_address = $email;
        $_SESSION['emailid'] = $email_address;

				// Initialize CURL:
				$ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');  
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				// Store the data:
				$json = curl_exec($ch);
				curl_close($ch);

				// Decode JSON response:
				$validationResult = json_decode($json, true);

				// Access and use your preferred validation result objects
 				//$validationResult['format_valid'];
 				//$validationResult['smtp_check'];
  				//$validationResult['mx_found'];
				//echo $validationResult['score'];



      			if( isset($validationResult['score'])>= 0.7 )
      			{
          			echo "<script type='text/javascript'>alert('valid email');</script>";
          			//echo $validationResult['smtp_check'];
      			}

                      



	  }
}



?>
