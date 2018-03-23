<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
<?php 
	/*mảng có thứ tự*/
	$array = array('red','yellow','blue','yellow');
	$array[] = "green";
	echo "<pre>";
	var_dump($array);
	echo "</pre>";
	echo "<br>";

	/*Duyệt mảng có thứ tự*/
	$length = count($array);
	for($i = 0; $i < $length; $i++)
	{
		echo $array[$i]."<br />";
	}
	foreach($array as $key => $val)
	{
		echo $key." - ".$val,"<br>";
	}
	/*Truy xuất phẩn tử trong mảng*/
	echo "Truy xuất phần tử có key là 3:$array[3]";
	/*Mảng không có thứ tự */
	$array_1 = array('name' => 'Jonh', 'age' => 22, 'email' => 'ducanhdhtb@gmail.com');
	echo "<pre>";
	var_dump($array_1);
	echo "</pre>";
	echo "<br>";

	/*Duyệt mảng không có thứ tự*/
	foreach($array_1 as $key1 => $val1)
	{
		echo $key1." - ".$val1,"<br>";
	}
	/*	Truy xuất phần tử trong mảng không có thứ tự*/
	echo "Truy xuất phần tử trong mảng không có thứ tự :";
	echo $array_1['age'];
	echo "<hr>";
	/*Một số hàm hỗ trợ trong mảng
	- array_merge($array1, $array2) => Gộp 2 mảng thành một mảng;
	- array_slice($array, vị trí tách, số lượng tách) => Trái với array_merge hàm array_slice dùng để tách mảng;
	- in_array($array, giá trị cần tìm) => tìm một phần tử có tồn tại trong mảng không;
	- is_array($array) => kiểm tra 1 biến có phải một mảng không;
	- array_change_key_case($array, $case) => Chuyển đổi key trong mảng thành chữ hoa nếu $case = 1 còn là chữ thường nếu $case = 0;
	- array_combine($array_key,$array_value) => Dùng để gộp 2 mảng thành một mảng kết hợp với mảng $array_key tương ứng với khóa còn $array_value tương ứng với giá trị.Điều kiện gộp mảng là số phần tử của 2 mảng phải bằng nhau
	- array_count_values($array) - Đếm số lần xuất hiện của các phần tử giống nhau trong mảng;
	- array_pop($array) - Xóa phần tử cuối cùng và trả về phần tử đã xóa;
	- array_shift($array) - Xóa phần tử đầu tiên trong mảng;
	- array_unshift($array,$value1,$value2) -Thêm các phần tử đầu tiên vào trong mảng
	- array_key_exist($key,$array) => Kiểm tra xem key có tồn tại trong mảng không.Trả về true nếu có false nếu không
	- array_unique($array) => Loại bỏ giá trị trùng trong mảng
	- array_value($array) => chuyển $array thành dạng chỉ mucj

	*/
	$array_merge = array_merge($array, $array_1);
	echo "<pre>";
	print_r($array_merge);
	echo "</pre>";

	$array_slice = array_slice($array_merge, 5,3);
	echo "<pre>";
	print_r($array_slice);
	echo "</pre>";

	$in_array = in_array('b2lue',$array);
	if($in_array == 1)
	{
		echo "Có tồn tại trong mảng";
	}
	else{
		echo "Không tồn tại trong mảng";
	}
	echo "<pre>";
	print_r($in_array);
	echo "</pre>";

	$keys = array(0,1,2,3);
	$values = array('Name','email,','password','repassword');
	$array_combine = array_combine($keys, $values);
	echo "<pre>";
	print_r($array_combine);
	echo "</pre>";

	$array_count_values = array_count_values($array);
	print_r($array_count_values);

	$array_pop = array_pop($array);
	echo "<pre>";
	print_r($array);
	echo "</pre>";

	$array_shift = array_shift($array);
	echo "<pre>";
	print_r($array);
	echo "</pre>";

	$a = array('high');
	$b = array('high1');
	$array_unshift = array_unshift($array, $a, $b);
	echo "<pre>";
	print_r($array_unshift);
	echo "</pre>";

	$array_key_exists = array_key_exists('name', $array_1);
	echo "<pre>";
	print_r($array_key_exists);
	echo "</pre>";

	$cd = array('red','yellow','blue','yellow','green','green');
	$array_unique = array_unique($cd);
	echo "<pre>";
	print_r($array_unique);
	echo "</pre>";

	$ef = array('red','yellow','blue','yellow','green','green');
	$array_values = array_values($ef);
	echo "<pre>";
	print_r($array_values);
	echo "</pre>";

 ?>
</body>
</html>