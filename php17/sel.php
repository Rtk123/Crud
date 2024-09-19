<?php
$con=mysqli_connect("localhost","root","","php17");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-3">
  <p><a href="index.php" class="btn btn-success">Add new</a></p>           
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Stream</th>
        <th>Subject</th>
        <th>image</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sel="SELECT * FROM students";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()){
      ?>
      <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['stream'];?></td>
        <td><?php echo $row['subject'];?></td>
        <td><img class="img"src="upload_img/<?php echo $row['image'];?>" /></td>
         <td> <a onclick="return confirm('DO YOU WANT TO DELETE?');"href="del.php?did=<?php echo $row['sid'];?>" class="btn btn-danger">Delete</a></td> 
         <td> <a onclick="return confirm('DO YOU WANT TO EDIT?');"href="edit.php?eid=<?php echo $row['sid'];?>" class="btn btn-success">Edit</a></td> 
    </tr>
      <?php } 
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
