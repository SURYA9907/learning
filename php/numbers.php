
<html>
<head>
    
    <title>Document</title>
</head>
<body>
    <h1>php interger</h1>
    <?php
    
    $x=5965;
    var_dump(is_int($x));
    $y=59.65;
    var_dump(is_int($y));
    echo "<h1>php float</h1>";
    var_dump(is_float($y));
    echo "<h1>php infinity</h1>";
    $x=1.9e411;
    var_dump($x);
    echo "<h1>php Nan</h1>";
    $r=acos(8);
    var_dump($x);
    echo "<h1>php numerical strings</h1>";
    $x=5985;
    var_dump(is_numeric($x));
    echo "<br>";
    $x="5985";
    var_dump(is_numeric($x));
    echo "<br>";
    $x="59.85"+100;
    var_dump(is_numeric($x));
    $x="hello";
    var_dump(is_numeric($x));
    echo "<h1>php casting strings and float into integers</h1>";
    $x=59.95;
    $int_cast=(int)$x;
    echo $int_cast;
    echo "<br>";
    $x="59.95";
    $int_cast=(int)$x;
    echo $int_cast;
    echo "<br>"
    ?>


</body>
</html>