<?php
$username = "root";
$password = "root";
$server = 'localhost';
$db = 'mywebsite';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
	//echo "Connection successful";
?>
<script>
	alert('Your Welcome!!!!!')
</script>

<?php
}else{
	// echo "NO Connection";
	die("no connection" . mysqli_connect_error());
}


?>