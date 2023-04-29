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
    echo "<h1>php constant</h1>";
    define("GREETINGS", "welcome to w3 schools",true);

    echo "<h1>php constant arrays</h1>"
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
      ]);
      echo cars[0];
    
    ?>
</body>
</html>