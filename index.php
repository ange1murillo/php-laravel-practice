<?php
    /*Hello this is a comment */
    # Hey this is also a comment
    $name = "Angel";
    $lastname = "Murillo";
    $car = "Honda Civic";
    const plane = "Soul Plane";
    const fullName = "Angel Murillo";
    $wrestleSentence = "The best wrestling squad was NWO";
    $wrestleSentence = strtoupper($wrestleSentence);

    function printName() {
        $car = "BMW";

        return $car;
    }

    function printFullName(){
        $first = "Angel";
        $last = "Murillo";

        echo "<h1> My Full Name is ${first} ${last}</h1>";
    }

    $bballPlayers = [
        [
            "name" => "MJ",
            "age" => 48
        ],
        [
            "name" => "Pippen",
            "age" => 45
        ],
        [
            "name" => "Kerr",
            "age" => 42
        ]
    ] 


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Document</title>
	</head>
	<body>
        <?php 
            echo "<h1>My Name is {$name}</h1>"

        ?>
        <?php 
            echo "<h1>{$car}</h1>"

        ?>
        <?php 
            echo plane

        ?>
        <?php 
            printFullName()

        ?>
        <?php 
            echo fullName

        ?>
         <?php 
         //concat
            echo "<p>Hi my name is " . "{$name}</p>"

        ?>
        <?php 
         //concat
            echo lcfirst($wrestleSentence);

        ?>
         <?php 
         
         foreach($bballPlayers as $player){
            echo "<hr>";
             echo  "<h1>Name: {$player["name"]}</h1>";
           
             echo  "<h1>Age: {$player["age"]}</h1>";
             echo "<hr>";
         }

        ?>
        
    </body>
</html>