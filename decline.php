
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'myntra');

$item_sno=$_POST['item_sno'];
$order=$_SESSION['order_id_decline'];

$sql="update billing set tailor_status='' where order_id=$order";
$result=mysqli_query($con,$sql);

if(!$result)
{
	
	echo "error";
}

else
{
	echo  '<script>location.reload()</script>';
}

//echo $_SESSION['user_id'];
?>
