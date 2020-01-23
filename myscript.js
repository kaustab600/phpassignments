
document.getElementById('second').onkeyup = function changeContent() {
	var str1 = document.getElementById('first').value;
	var str2  = document.getElementById('second').value;

   document.getElementById('full').value = str1.concat(" ",str2);

   
}


/*function OnBlurInput () {
			
			var str1 = document.getElementById("first").value;
			var str2 = document.getElementById("second").value;
			document.getElementById('full').value= str1.concat(" ",str2);

        }*/
 

	
		


