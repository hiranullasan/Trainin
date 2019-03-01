<?php
?>
<!DOCTYPE html>
<head><b><center>STUDENT REGISTRATION</center><b></head>
	<body>
		<br><br>
		<title>Register</title>
		<table align="center" cellpadding="12">
			<tr>
				<td colspan="2"><b>Name:</b></td>
				<td colspan="2"><input type = "text" name="name"></td>
			</tr>
			<tr>
				<td colspan="2"><b>Age :</b></td>
				<td colspan="2"><input type = "text" name="age"></td>
			</tr>
			<tr>
				<td colspan="2"><b>Sex :</b></td>
				<td colspan="2"><input type ="radio" name="age">Male<input type ="radio" name="age">Female</td>
			</tr>
			<tr>
				<td colspan="2"><b>City :</b></td>
				<td colspan="2"><select name="city">
					<option value="Kasargod">Kasargod</option>
					<option value="Kannur">Kannur</option>
					<option value="Kozhikod">Kozhikod</option>
					<option value="Malapuram">Malapuram</option>
				</select></td>
			</tr>
			<tr>
				<td colspan="2"><b>Address :</b></td>
				<td> <textarea name="message" rows="10" cols="30"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><b>Qualification :</b></td> 
				<td colspan="2"><select name="cars" size="4" multiple>
					<option value="mca">MCA</option>
					<option value="mba">MBA</option>
					<option value="bsc">Bsc</option>
					<option value="bca">BCA</option>
				</select></td>
			</tr>
			<tr> 
				<td colspan="2"><b>Grade :</b></td>
				<td colspan="2"><select name="grade">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
				</select></td>
			</tr>
			<tr>
			<td colspan="2"><input type="submit" name="submit" value="Register"></td>
			</tr>	
		</table>
	</body>

