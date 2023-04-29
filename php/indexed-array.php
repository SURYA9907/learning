<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $x=array("red","blue");
  echo "i like".$x[0].",".$x[1].".";
  $cars=array("volvo","tata","bmw");
  $arrlenght=count($cars);
  for($y=0;$y<$arrlenght;$y++){
  echo $cars[$y];
  echo "<br>" ; 
}
  
  ?>  
</body>
</html>