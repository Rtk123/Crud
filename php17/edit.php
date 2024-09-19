<?php

$con=mysqli_connect("localhost","root","","php17");
$id=$_GET['eid'];
//echo $id;
$sel="SELECT * FROM students WHERE sid='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();

?>
 <link rel="stylesheet" href="style.css">
<form action="upd.php"method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['sid'];?>"/>        
<p>Name</p>
    <p><input type="text" name="name" value="<?php echo $row['name'];?>"></p>
    <p>Gender</p>
    
    <p><label><input <?php if($row['gender']=="Male"){ echo "checked"; }?> type="radio" name="gender" value="Male">Male</label></p>
    <p><label><input <?php if($row['gender']=="Female"){ echo "checked"; }?> type="radio" name="gender" value="Female">Female</label></p>


    <p>Stream</p>
    <p>
        <select name="stream">
        <option value="" >select stream</option>
        <option <?php if($row['stream']=="BCA"){echo "selected";} ?> value="BCA">BCA</option>
<option <?php if($row['stream']=="MCA"){echo "selected";} ?> value="MCA">MCA</option>
<option <?php if($row['stream']=="BBA"){echo "selected";} ?> value="BBA">BBA</option>
<option <?php if($row['stream']=="B TECH"){echo "selected";} ?> value="B TECH">B TECH</option>

    </select>
</p>
<p>Subject</p>

<?php
$sb=explode(",",$row['subject']);
?>
<p><label><input <?php if (in_array("C", $sb)) {echo "checked";} ?> type="checkbox" name="sub[]" value="C">C</label></p>
<p><label><input <?php if (in_array("C++", $sb)) {echo "checked";} ?> type="checkbox" name="sub[]" value="C++">C++</label></p>
<p><label><input <?php if (in_array("Python", $sb)) {echo "checked";} ?> type="checkbox" name="sub[]" value="Python">Python</label></p>
<p><label><input <?php if (in_array("Java", $sb)) {echo "checked";} ?> type="checkbox" name="sub[]" value="Java">Java</label></p>

<p>Image</p>
<p><input type="file"name="simg"/></p>
<img class="img"src="upload_img/<?php echo $row['image'];?>" />
<P><input type="submit" name="save" value="add students"/></P>
    </form>