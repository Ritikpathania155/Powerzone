<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<body>
    <div class="container">
        This is my first php website

        <?php
        define ("PI3", 3.14);
        echo "Hello world";

        //single line comment
        /*Multiple
      line 
      comment*/
        //   another
        //   method 
        //   for multilne comment
        $variable1 = 50;
        $variable2 = 40;
        echo $variable1;
        echo $variable2;

        echo $variable1 + $variable2;
        echo "<br>";

        echo "The value of variable1 + variable2 ";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "The value of variable1 - variable2 ";
        echo $variable1 - $variable2;
        echo "<br>";
        echo "The value of variable1 * variable2 ";
        echo $variable1 * $variable2;
        echo "<br>";
        echo "The value of variable1 / variable2 ";
        echo $variable1 / $variable2;
        echo "<br>";

        //   Assignment Operators
        $newbar = $variable1;
        $newbar += 1;
        echo "The value of newbar is ";
        echo $newbar;
        echo"<br>";

        //   Comparison Operators
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo"<br>";

        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo"<br>";

        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo"<br>";

        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo"<br>";


        //   Increment/Decrement Operators
        echo $variable1++;
        echo "<br>";
        echo $variable1--;
        echo "<br>";
        echo ++$variable1;
        echo "<br>";
        echo --$variable1;
        echo "<br>";


        //   Logical Operator
        // and (&&)
        // or (||)
        // xor
        // not !

        // // $myvar = (true and true);
        // // $myvar = (true and false);
        // // $myvar = (false and true);
        // $myvar = (false and false);
        // $myvar = (true or false);
        // $myvar = (true xor true);
        $myvar = (true xor false);
        echo "<br>";
        echo var_dump($myvar);

        ?>

        <?php
        // Data types in php
        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array
        // 6. Object

        echo "<br> Data Types <br>";
        $var = "This is string";
        echo var_dump($var);
        echo "<br>";

        $var = 67;
        echo var_dump($var);
        echo "<br>";

        $var = 67.1;
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";
 
        echo PI3;


        ?>
    </div>
</body>

</html>