<? include 'select.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Mysql connection</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   

    <?
    if ($result_check > 0) 
   	{
    	
    	while ($row = mysqli_fetch_assoc($select_result)) 
    	{
    		
    	
    		?>
    		 <tr>

			      <th scope="row">1</th>
			      <td><?= $row['name']; ?></td>
			      <td><?= $row['password']; ?></td>
			      <td>
              <button class ="sil btn btn-danger" data-id="<?= $row['id'] ?>">Sil</button>
  			      <button class ="update btn btn-info" data-id="<?= $row['id'] ?>">update</button>
          </td>
   			 </tr>
    <?
 
    	}

    }

    ?>
   
  </tbody>
</table>

<form action="create.php" method="post">
	<input type="text" name="name">
	<input type="text" name="password">
	<input type="submit" name="save" value="save">	
</form>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="script.js"></script>
</body>
</html>