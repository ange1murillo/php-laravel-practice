<?php
  $cities = [
        [
            'city' => 'Chicago',
            'population' => 80000,
            'nickname' => 'The Windy City'
        ],
        [
            'city' => 'Miami',
            'population' => 80000,
            'nickname' => 'South Beach'
        ],
        [
            'city' => 'Los Angeles',
            'population' => 80000,
            'nickname' => 'LA'
        ]

        ];

      $cities[3] = "Another City";
      $cities[2]["population"] = 2000;

      $cars = [
          [
              "name" => "ML 350",
              "company" => "Mercedes Benz",
              "wheels" => 4,
              "doors" => 4
          ],
          [
            "name" => "G Class",
            "company" => "Mercedes Benz",
            "wheels" => 4,
            "doors" => 2
        ],
        [
            "name" => "C Class",
            "company" => "Mercedes Benz",
            "wheels" => 4,
            "doors" => 4
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
    echo "You live in {$cities[1]["city"]}";
    ?>
    
    <br>

<pre>
<?php var_dump($cities);?>
</pre>

<?php 
 $names = ["Angel"];
    array_push($names, "Jane", "Johnny", "Steven");
    array_pop($names);
?>

<br>

<pre>
<?php var_dump($names);?>
</pre>

<?php
echo "The C class has " . $cars[2]["wheels"] . " wheels. ";
echo "The ML 350 has " . $cars[0]["doors"] = 2 . " doors.";
?>
        
    </body>
</html>