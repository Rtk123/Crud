<?php 
if(isset($_POST['save'])){

    $n=$_POST['name'];
    $g=$_POST['gender'];
    $s=$_POST['stream'];

    if(isset($_POST['sub'])){

    $sb=implode(",",$_POST['sub']);
    }
    else{
        $sb="";
    }
    $buf=$_FILES['simg']['tmp_name'];
    $fn=time().$_FILES['simg']['name'];
    move_uploaded_file($buf,"upload_img/".$fn);
    $con=mysqli_connect("localhost","root","","php17");
    $ins = "INSERT INTO students (name, gender, stream, image, subject) VALUES ('$n', '$g', '$s', '$fn', '$sb')";
    
   if( $con->query($ins)){
    header("location:sel.php");
   };
    
}else{
    echo "403 Forbidden";
}
?>
