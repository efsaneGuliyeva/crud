<?

include 'connection.php';
if (isset($_POST['save'])) 
{
	$name = $_POST['name'];
	$password = $_POST['password'];
	$insert = "INSERT into users (name, password) values ('$name', '$password')";
	mysqli_query($con, $insert);
	header('Location: index.php');
}



?>