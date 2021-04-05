
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'myntra');

$order=$_SESSION['order_id'];
$tailor=$_SESSION['tailor'];
$sql="update billing set tailor_id=$tailor where order_id=$order";
$result=mysqli_query($con,$sql);

echo "<script>window.location.href = 'index.php';</script>";

//echo $_SESSION['user_id'];
?>
