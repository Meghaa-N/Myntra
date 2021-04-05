
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'myntra');

$order=$_SESSION['order_id'];

$sql="select sum(total) from order_log where order_id=$order";
$result=mysqli_query($con,$sql);
$temp=mysqli_fetch_assoc($result);
$total=$temp['sum(total)'];


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phno=$_=$_POST['phno'];
$address=$_POST['address'];
$country=$_POST['country'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$delivery_date=$_POST['delivery_date'];
$under_image=$_POST['under_image'];
$personal=$_POST['personal'];
$sql="insert into billing(order_id,fname,lname,email,phno,address,country,city,state,zipcode,delivery_date,text,personalized_msg,total) values($order,'$fname','$lname','$email','$phno','$address','$country','$city','$state',$zip,'$delivery_date','under_image','personal',$total)";
$result=mysqli_query($con,$sql);


if(isset($_FILES["image"]["name"])) {
  $namefile=basename($_FILES["image"]["name"]);
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(empty($_FILES["image"]["name"])){
  echo "<script>alert('Content missing. Try again!.')</script>";}
  else
  {

  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "<script>alert('File is not an image.')</script>";
    $uploadOk = 0;
  }


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.')</alert>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $sql="update billing set image='$target_file' where order_id=$order";
    if (mysqli_query($con, $sql)) {
} else {
  echo "<script>alert('Error: ' . $sql . '<br>'' . mysqli_error($con)')</script>";
}

    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.')</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
  }
}
}
}
echo "<script>window.location.href = 'delivered.php';</script>";

//echo $_SESSION['user_id'];
?>
