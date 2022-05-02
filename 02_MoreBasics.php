<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(228, 195, 195);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1> Let's learn about PHP </h1>
        <br>
        <p>Your party status is here</p>
        <?php
        $age = 6;
        if($age>18){
            echo "You can go to the party";
        }
        else if($age==7){
            echo "You are 7 years old";
        }
        else if($age==6){
            echo "You are 6 years old";
        }
        else{
            echo "You can not go to the party";
        }
        echo "<br>";
        echo "<br>";

        // Arrays in PHP
        $languages = array("Java", "Python", "C++", "JavaScript");
        // echo $languages[3];
        // echo "<br>";
        // echo count($languages); 
        // echo "<br>";
        // echo "<br>";

        // Loops in PHP

        $a = 0;
        while ($a <= 10) {
            echo "The value of a is: ";
            echo $a;
            echo "<br>";
            $a++;
        }
        echo "<br>";
        echo "<br>";

        // Iterating arrays in PHP using while loop

        $a = 0;
        while ($a < count($languages)) {
            echo "The value of language using while loop is: ";
            echo $languages[$a];
            echo "<br>";
            $a++;
        }
        echo "<br>";
        echo "<br>";

        // do-while loop

        $a = 20;
        do {
            echo "The value of a from the do-while loop is: ";
            echo $a;
            echo "<br>";
            $a++;
        }
        while ($a < 10) ;
        echo "<br>";
        echo "<br>";

        // For loop

        for ($a=0; $a < 10; $a++) { 
            echo "The value of a from the for loop is: ";
            echo $a;
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";

        // foreach loop

        foreach ($languages as $value){
            echo "The value using for each loop is: ";
            echo $value;
            echo "<br>";
        }
        echo "<br>";
        echo "<br>";

        function print5(){
            echo "FIVE";
        }
        print5();
        echo "<br>";
        print5();
        echo "<br>";
        echo "<br>";

        function print_num($num){
            echo "Your no is ";
            echo $num;
        }
        print_num(10);
        echo "<br>";
        echo "<br>";

        ?>
    </div>
</body>
</html>