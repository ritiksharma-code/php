<!DOCTYPE html>
<html lang="en">
<head>
    <title>Variable</title>
</head>
<body>
    <?php
        $a=10;
        $b=10.00;
        $c="Program";
        $d=True;
        $car="BMW";
        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        echo "my car is $car <br>";
        echo "my car is $car "."<br>";
        echo "my car is ". $car. " color blue";         // Concatenation of string

    ?>
</body>
</html>