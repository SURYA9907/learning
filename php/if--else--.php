
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>if...</h1>";
    $t= date("h");
    if ($t < "12") {echo "have a good day";
    }
    echo "<h1>if..else</h1>";
   $t=date("H");
    if ($t<12){
        echo "have a good day" ;
    }
    else {echo "have a good night" ;
    }
    echo "<h1>if.elseif.else</h1>";
    $r=date("H");
    if ($r<10){echo "have a good morning" ;
    }
    elseif ($r<20){echo "have a good day" ;
    }
     else {echo "have a good night" ;
    }
    
    ?>
</body>
</html>