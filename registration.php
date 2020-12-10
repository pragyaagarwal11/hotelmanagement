<?php
include "lib/header.php";

?>
<?php
include "connection.php";
if(isset($_POST['submit']))
{
$name      = $_POST['name'];
$phone     = $_POST['phone'];
$email     = $_POST['email'];
$gender    = $_POST['gender'];
$password  = $_POST['password'];
 $sql = "insert into `user` (`id`,`name`,`phone`,`email`,`gender`,`password`) values ('','$name','$phone','$email','$gender','$password') ";
$db->query($sql);
}
?>

<html>
<form action = "" method = "post">
<table align = "center">
	<tr>
		<td>
			Enter Name:
		</td>
		<td>
			<input type="text" name="name" >
		
	   </td>
	</tr>
	<tr>
		<td>
			Enter Phone:
		</td>
		<td>
			<input type="phone" name="phone" >
		</td>
	</tr>
	<tr>
		<td>
			Enter Email:
		</td>
		<td>
			<input type="email" name="email" >
		</td>
	</tr>
	<tr>
		<td>
			Gender:
		</td>
		<td>
			<input type="radio" name="gender"  value="female">Female
			<input type="radio" name="gender"  value="male">Male
		</td>
	</tr>
	<tr>
		<td>
			Enter Password:
		</td>
		<td><input type = "password" name = "password"></td>
	</tr>	
		<td>
			<input type = "submit" name = "submit" value = "register"> 
		</td>
	
	

</table>
</form>

<?php
include "lib/footer.php";

?>