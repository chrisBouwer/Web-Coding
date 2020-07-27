<?php
echo"
<html>

	<head>
		<title>Form Experiment</title>
	</head>
	
	<meta name = 'description' content = 'We are learning to work with HTML'>
	
	<body>
		<h2>This is the text box</h2>
		
		<form action = 'https://za.pearson.com' method = 'get'>
			<input type = 'text' name = 'theText' value = 'Enter URL here'>
			<br>
 			<input type = 'submit' name = 'FirstBtn' value = 'Accept1'>
			<input type = 'submit' name = 'SecondBtn' value = 'Accept2'>
			
			<!-- This is used to comment out in HTML --!>
			
			<p align = 'center'> Here is some <b>random<b> <i>text<i>.</p>
			<br>
			<hr> <!-- Creates a line across the screen --!>
		</form>
		
		<style>
		table, th, td {
		  border: 1px solid black;
		}
		</style>
		
		<h2>Table</h2>
		
		<table style = 'width:100%'>
		  <tr>
			<th>Col 1</th>
			<th>Col 2</th> 
			<th>Col 3</th>
		  </tr>
		  <tr>
			<td> 1.1 </td>
			<td> 2.1 </td>
			<td> 3.1 </td>
		  </tr>
		  <tr>
			<td> 1.2 </td>
			<td> 2.2 </td>
			<td> 3.2 </td>
		  </tr>
		  <tr>
			<td> 1.3 </td>
			<td> 2.3 </td>
			<td> 3.3 </td>
		  </tr>
		</table>
 
	</body>
</html>
";
?>