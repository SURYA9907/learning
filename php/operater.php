
<html>
<head>

    <title>Document</title>
</head>
<body>
    <h1>arimethic progession</h1>
    <?php
    
    $x=10;
    $y=6;
    echo $x+$y;
    echo "<br>";
    echo $x-$y;
    echo "<br>";
    echo $x*$y;
    echo "<br>";
    echo $x/$y;
    echo "<br>";
    echo $x%$y;
    echo "<br>";
    echo $x**$y;
    ?>
    <h1>assignment operators</h1>
    <?php
    $x=10;
    $x+=100;
    echo $x;
    echo "<br>";
    $x=10;
    $x-=5;
    echo $x;
    echo "<br>";
    $x=5;
    $x*=100;
    echo $x;
    echo "<br>";
    $x=10;
    $x/=5;
    echo $x;
    echo "<br>";
    $x=5;
    $x%=3;
    echo $x;
    echo "<br>";
    ?>
    <h1>comparison operators</h1>
    <?php
    $x=5;
    $y="5";

    var_dump($x==$y);
    echo "<br>";
    $x=5;
    $y=5;
    var_dump($x===$y);
    echo "<br>";
    $x=5;
    $y=6;
    var_dump($x!=$y);
    echo "<br>";
    $x=5;
    $y=5;
    var_dump($x<>$y);
    echo "<br>";
    $x=5;
    $y=5;
    var_dump($x!==$y);
    echo "<br>";
   $x=5;
   $y=5;
   var_dump($x>$y);
   echo "<br>";
   $x=5;
   $y=5;
   var_dump($x<$y);
   echo "<br>";
   $x=5;
   $y=5;
   var_dump($x>=$y);
   echo "<br>";
   $x=5;
   $y=5;
   var_dump($x<=$y);
   echo "<br>";
   $x=5;
   $y=5;
   var_dump($x<=>$y);
   ?>
   <?php
   echo "<h1>php increament/decrement operators</h1>";
   $x=10;
   echo ++$x;
   echo "<br>";
   $x=10;
   echo $x++;
   echo "<br>";
   $x=10;
   echo --$x;
   echo "<br>";
   $x=10;
   echo $x--;
   echo "<br>";  
   echo "<h1>php logical operators</h1>";
   $x=5;
   $y=5;
   if($x==5 and $y==5){echo "hello world";}
   echo "<br>";
   $x=5;
   $y=5;
   if($x==5 or $y==5){echo "hello world";}
   echo "<br>";
   $x=5;
   $y=5;
   if($x==5 && $y==5){echo "hello world";}
   echo "<br>";
   $x=5;
   $y=5;
   if($x==5 || $y==5){echo "hello world";}
   echo "<br>";
   echo "<h1>php string operators</h1>";
   $txt1 ="hello";
   $txt2 ="world";
   echo $txt1.$txt2;
   echo "<br>";
   $txt1 ="hello";
   $txt2 ="world";
   echo $txt1 .= $txt2;
 ?>
 <?php
   echo "<h1>php conditional operators</h1>";
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");
   $x=5;
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");
   

?>




    </body>
</html>