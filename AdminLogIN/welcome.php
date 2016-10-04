<?php
	//$con = mysqli_connect("localhost","root","","admindb");
	include 'databaseConfig.php';
	if(isset($_POST['submit']))
	{
		$username = $_POST['name'];
		$password = md5($_POST['pass']);
		
		$username_password = ("select UserName,Password from admin where UserName = '".$_POST['name']."' and Password = '".md5($_POST['pass'])."' ");
		$query_username_password = mysqli_query($con,$username_password);
		$row_username_password = mysqli_fetch_array($query_username_password);
		//var_dump($row_username_password);
		if($row_username_password['UserName']== $_POST['name'] && $row_username_password['Password']== md5($_POST['pass']))
		{
			echo "finally success".$row_username_password['UserName'];
		}
		else
		{
			echo "finally failed";
		}

		
	}

?>