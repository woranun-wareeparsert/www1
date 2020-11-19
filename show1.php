<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab02.mysql.database.azure.com', 'woranun@lab02', 'VGTlfl45', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN !: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>

<div class="container">
  <table width="800" border="1" class="p-3 mb-2 bg-info text-white" class="center" >
    <thead class="thead-dark">
    <tr class="active">
      <th width="200"> <div align="center" class="p-3 mb-2 bg-light text-dark">Name</div></th>
      <th width="500"> <div align="center" class="p-3 mb-2 bg-light text-dark">Comment</div></th>
      <th width="150"> <div align="center" class="p-3 mb-2 bg-light text-dark">Action</div></th>
    </tr>
     </thead>
  <?php
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><center><?php echo $Result['Name'];?></center></td>
      <td><center><?php echo $Result['Comment'];?></center></td>
      <td><center><a href="formedit.php"><input type="submit" value="Edit" class="btn-default"></a><a href="fromdelete.php"><input type="submit" value="Delete"  class="btn-default"></a></center></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <a href="forminsert.php"><input type="submit" value="ADD" class="btn-default btn-sm"></a>
  <?php
  mysqli_close($conn);
  ?>
</div>
</body>
</html>
