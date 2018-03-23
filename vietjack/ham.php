<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>
<!-- 	Ham ko co tham so -->
	<?php
	function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function
?>
<br>
<!-- Ham co tham so truyen vao -->
<?php 
	function name($name){
		echo "Hello :" . strtoupper($name);
		echo "<br>";
	}

	name("nguyen duc anh");

	?>
<?php 
	function born($date,$month,$year){
		$arr = array($date,$month,$year);
		echo "He was born on ".implode("/",$arr);
	}
	//call the function
	born('15','2','1993');
	echo "<br>";
	born('12','2','1990');
 ?>

<!--  Ham co gia tri tra ve -->
<?php 
	function tinh_tong($x,$y)
	{
		$tong = $x + $y;
		return $tong;
	}
	echo tinh_tong(10,20);
 ?>
</body>
</html>