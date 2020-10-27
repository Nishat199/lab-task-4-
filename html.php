<?php
$gender="";
$err_gender="";
$name="";
$err_name="";
$has_error=false;

if ( isset ($_POST["gender"])){
	$err_gender="gender required";
	$has_error=true;
}
else{
	$gender=$_POST["gender"];
}

?>
<html>
<head>
<title>Club Member Registration</title>
</head>
<body>
<hr>
<form action="" method="post">
<fieldset>
<legend align="center">Club Member Registration</legend>
<table>
<tr>
<td align="right">Name:</td>
<td><input type="text" name=""></td>
</tr>
<tr>
<td align="right">Username:</td>
<td><input type="text"></td>
</tr>
<tr>
<td align="right">Password:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td align="right">Confirm Password:</td>
<td><input type=" Confirm Password" name="Confirm password"></td>
</tr>
<tr>
<td align="right">Email:</td>
<td><input type="text"></td>
</tr>
<tr>
<td align="right">Phone:</td>
<td><input type="text" placeholder="code" size="3"> -
<input type="text" placeholder="Number" size="9">
</td></tr>
<tr>
<td align="right">Address: </td>
<td><input type="text" placeholder="Street Address">
</td>
</tr>
<tr>
<td></td>
<td><input type="text" placeholder="City" size="6"> -
<input type="text" placeholder="State" size="6"></td></tr>
<tr><td></td>
<td><input type="text" placeholder="Postal/Zip code">
</td></tr>
<tr>
<td align ="right">Birth Date:</td>
<td> <select>
<option selected>Day</option> 
<?php 
for ($i-1;$i<-31;$i++){
	echo "<option>",$i, "<option>";
}
?>
</select>
<select>
<option>Month </option>
</select>
<select>
<option>Year</option>
</select>
</td></tr>
<tr>
<td align="right">Gender:</td>
<td><input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
</td>
</tr>
<tr>
<td align="right">Where did you hear about us?</td>
<td><input type="checkbox" name="Where did you hear about us[]">A friend or Colleague<br>

<input type="checkbox" name="Where did you hear about us[]">Google<br>

<input type="checkbox" name="Where did you hear about us[]">Blog Post<br>

<input type="checkbox" name="Where did you hear about us[]">News Article<br>
</td></tr>
<tr>
<td align="right">Bio:</td>
<td><textarea></textarea>
</td></tr>
<tr>
<td align="right"><input type="submit" value="register"></td>
<tr>
</table>


