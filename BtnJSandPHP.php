<?php
if(isset($_GET['theText'])){
	$input = $_GET['theText'];
} else {
	$input = "no PHP info to display";
}
echo"
<html>

	<head>
		<title>Form Text</title>
	</head>
	
	<meta name = 'description' content = 'We are learning to work with HTML'>
	
	<body>
	<script>
		function btn2pressed(){
			var input;
			input = document.getElementById('JSin').value;
			//alert(input);
			document.getElementById('outputJS').innerHTML = input;
		}
	</script>";
echo $input;
echo"
		<p id = 'outputJS'> no JavaS info to display </p>
		<h2>This is the text box</h2>
		
		<form action = 'http://localhost/keathan/BtnJSandPHP.php' method = 'get'>
			<input type = 'text' id  = 'JSin' name = 'theText' value = 'Enter URL here'>
			
			<br><br>
			
 			<input type = 'submit' name = 'btnSubmit' value = 'PHP'>
			<input type ='button' value = 'JavaS' onClick = 'btn2pressed();'>
			
			<select name = 'select'>
				<option value = 'A'> door </option>
				<option value = 'bee'> hive </option>
				<option value = '3'> four </option>
			</select>
			
			<br>
			<input type = 'checkbox' name = 'check1' value = 'checked'> check here if you want to.
			
			<!-- This is used to comment out in HTML --!>
			
			<p align = 'center'> Here is some <b>random<b> <i>text<i>.</p>
			<br>
			<hr> <!-- Creates a line across the screen --!>
		</form>
	</body>
</html>
";
?>