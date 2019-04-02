<?
include 'connection.php';

$select_query = "SELECT * FROM users";
$select_result = mysqli_query($con, $select_query);
$result_check = mysqli_num_rows($select_result);

?>