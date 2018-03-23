<html>
   
   <head>
      <title>Đếm kí tự trong chuỗi PHP</title>
   </head>
   <body>
   
       <?php
        $string_ban_dau="Nguyen duc anh";  
        $ki_tu_can_tim="e";  
        $count="0";  
        for($x="0"; $x < strlen($string_ban_dau); $x++)  
          {   
          if(substr($string_ban_dau,$x,1) == $ki_tu_can_tim)  
          {  
          $count = $count+1;  
           }  
          }  
    echo "Có " .$count. " kí tự " .$ki_tu_can_tim. " trong chuỗi '" .$string_ban_dau. "'";
       ?>
       
   </body>
</html>