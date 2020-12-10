<?php
	session_start();
	include "lib/connection.php";
	if($_SESSION['login']!="true")
	{
		header('location:login.php?msg=1');
	}
	
	
	$sql="select * from `user` where `id`='$_SESSION[id]'";
	$run=$db->query($sql);
	$row=$run->fetch_array();
	
?>

<h2>Welcome Miss/Mrs/Mr.<?=$row['name'];?></h2>
<p><center> YOUR DETAILS</center></p>
<table border="1" cellpadding="5" align="center">
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" value=<?=$row['name'];?>>
			</td>
		</tr>
		
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="email" value=<?=$row['email'];?>>
			</td>
		</tr>
        
        <tr>
			<td>
				Gender
			</td>
			<td>
				<input type="radio" value=<?=$row['gender'];?>>
			</td>
        </tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="text" value=<?=$row['password'];?>>
			</td>
        </tr>
        
        
		<tr>
		  <td colspan =2 align="center">
		  <center>
		   <a href="edit.php?edit_id=<?=$row['id']?>">EDIT</a>
		   </center>
		   </td>
		</tr>
</table>
			<center>
			<br><br>
			<a href="Change.php">CHANGE PASSWORD</a>
			</center>