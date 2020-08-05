<html>
	<head>
		<title> Register </title>	
	</head>
	<body>
			<h1> Buat Account Baru ! </h1>
			<h2> Sign Up Form</h2>
			
			
			<form>
  <label for="firstname">First name:</label><br>
  <input type="text" id="firstname" name="firstname" value=""><br>
  
  <label for="lastname">Last name:</label><br>
  <input type="text" id="lastname" name="lastname" value=""><br><br>
  
  <label for="gender">Gender:</label><br><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br><br>
  
   <label for="fname">Nationality:</label><br><br>
  <select id="national" name="nationality">
  <option value="ID">Indonesian</option>
    <option value="Malaysian">Malaysian</option>
    <option value="Singapore">Singapore</option>
     </select>
	 <br> <br>
	 <label for="language">Language Spoken:</label><br><br>
	  <input type="checkbox" id="language1" name="Bahasa Indonesia" value="Bahasa Indonesia">
  <label for="language1"> Bahasa Indonesia</label><br>
  
  <input type="checkbox" id="language2" name="English" value="English">
  <label for="language2"> English</label><br>
  
  <input type="checkbox" id="language3" name="Other" value="Other">
  <label for="language3"> Other</label><br><br>
  
    <label for="bio">Bio : </label><br><br>
   <textarea name="message" rows="10" cols="30"></textarea>
   <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
</form> 
	<form action="/welcome">
 
	<input type="submit" value="Sign Up">
	</form>
			
			
			
		
			
			  
			
			

	</body>

	
</html>