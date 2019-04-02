<?

include 'connection.php';

$del_id = $_POST['del_id'];
$del = "DELETE from users where id='$del_id'";
mysqli_query($con, $del);

header("Location: index.php");

?>