<!DOCTYPE html>
<html>
<head>
	<title>Bài tập PHP: Khai báo và tạo mảng</title>
</head>
<body>
	<?php
	//sử dụng vòng lặp foreach để lặp qua các phần tử mảng
		$color = array('red','green','yellow');
		foreach($color as $cl)
		{
			echo "Color list: " . $cl."<br>";
		}
		echo "<hr>";
		$student = array('Binda','Aom','Critney');
		foreach($student as $st)
		{
			echo "Student list - " . $st. "<br>";
			
		}
		//sắp xếp các phần tử mảng
			sort($student);  
	
	 ?>
	 <hr>
	 <h3 style="text-align: center">Viết PHP script để tạo mảng liên hợp hiển thị tên các quốc gia và thủ đô.</h3>
		<?php 
			$mang_lien_hop = $arrayName = array('Vietnam' => 'Ha Noi' , 'Lao' => 'lampu' , 'China' => 'backinh'  ); 
			//Duyet mang
			foreach($mang_lien_hop as $country =>$capital)
				 echo "Thủ đô của $country là $capital"."<br>" ; 
		 ?>
	<hr>
	<h2 style="text-align: center">Xóa phần tử mảng trong PHP</h2>
		<?php 
			$day_so  = array('0','1','2','3');
			unset($day_so['2']);
			foreach ($day_so as $ds)
				echo $ds."<br>";
		 ?>
	<hr>
		<h2 style="text-align:center;">Lấy phần tử đầu tiên trong mảng PHP</h2>
		<?php 
			$mang_lien_hop = $arrayName = array('Vietnam' => 'Ha Noi' , 'Lao' => 'lampu' , 'China' => 'backinh'  ); 
			//Duyet mang
			echo reset($mang_lien_hop);
		 ?>

		 <hr>
		 <h2 style="text-align:center;">Chen` phan tu vao trong mảng PHP</h2>
		<!--  Cú pháp: array_splice($array, $offset [, $lenght, $replace]);

				Trong đó:

				$array là mảng dữ liệu truyền vào.
				$offset là vị trí của phần tử đầu tiên bị xóa.
				Các phần tử tron dấu [ ] có thể không truyền vào:

				$lenght là số phần tử bị xóa.
				$replace phần tử hoặc mảng thay thế các phần tử bị xóa. -->
		<?php 
			$love = array('Ha ngan', 'Linh' , 'Thu' , 'Duc Anh ');
			$phan_tu_can_chen = 'Love';
			array_splice($love, 1,2,$phan_tu_can_chen);
			foreach($love as $lv)
			{
				echo $lv."<br>";
			}

		 ?>
		 <hr>
		 <h2>Sắp xếp mảng liên hợp trong PHP</h2>
		 <?php
         echo "1. Sắp xếp tăng dần theo Value<br>";  
		$array2=array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); asort($array2);  
		foreach($array2 as $y=>$y_value)  
		{  
		  echo "Tuổi của ".$y." là: ".$y_value."<br>";  
		}  
		
		echo "2. Sắp xếp tăng dần theo Key<br>";  
		$array3=array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); ksort($array3);  
		foreach($array3 as $y=>$y_value)  
		{  
		  echo "Tuổi của ".$y." là: ".$y_value."<br>";  
		}  
		
		echo "3. Sắp xếp giảm dần theo Value<br>";  
		$age=array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");  
		arsort($age);  
		foreach($age as $y=>$y_value)  
		{  
		  echo "Tuổi của ".$y." là: ".$y_value."<br>";  
		}  
		
		echo "4. Sắp xếp giảm dần theo Key<br>";  
		$array4=array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); krsort($array4);  
		foreach($array4 as $y=>$y_value)  
		{  
		  echo "Tuổi của ".$y." là: ".$y_value."<br>";  
		}
       ?>
       <hr>
       <?php 
       	$course = array("name" => "PHP", "time" => 200);

$newArr = array_values($course);

echo "<pre>";
print_r($newArr);
echo "</pre>";

        ?>
       
       
</body>
</html>