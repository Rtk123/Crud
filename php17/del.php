 <!-- <?php
$con=mysqli_connect("localhost","root","","php17");

$id=$_GET['did'];
$sel="SELECT * FROM students";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();
unlink("upload_img/".$row['simg']);

$d="DELETE FROM students WHERE sid='".$id."'";
if($con->query($d)){
    header("location:sel.php");
};
?> 


 -->

 <?php
 $con=mysqli_connect("localhost","root","","ritik");
  $id=$_GET['did'];
  $sel=" SELECT * FROM students ";
  $rs=$con->query($sel);
  $row=$rs->fetch_assoc();
  unlink("upload_img/".$row['image']);

  $d="DELETE *FROM students WHERE sid='".$id."'";
  if($con->query($d)){
    header("location:sel.php");
  };
  ?>
