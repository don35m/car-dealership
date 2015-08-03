<?php


    class Car
    {

        public $make_model;
        public $image;
        public $price;
        public $miles;
        public $color;



        function __construct($make_model, $image, $price, $miles, $color = "black")
        {
            $this->make_model = $make_model;
            $this->image = $image;
            $this->price = $price;
            $this->miles = $miles;
            $this->color = $color;
        }
      }


    $porsche = new Car("2014 Porsche 911", "images/porsche.jpeg",  114991, 7864);
    $ford = new Car("2011 Ford F450", "images/ford.jpeg", 55995, 14241);
    $lexus = new Car("2013 Lexus RX350", "images/lexus.jpg", 44700, 20000, "red");
    $mercedes = new Car("Mercedes Benz CLS550", "images/mercedes.jpg", 39900, 37979);



    $cars = array($porsche, $ford, $lexus, $mercedes);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars as $car) {
                echo "<li> $car->make_model </li>";
                echo "<li><img src= $car->image ></li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                    echo "<li> Color: $car->color </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
