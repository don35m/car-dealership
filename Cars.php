<?php


    class Car
    {

        private $make_model;
        private $image;
        private $price;
        private $miles;
        private $color;



        function __construct($make_model, $image, $price, $miles, $color = "black")
        {
            $this->make_model = $make_model;
            $this->image = $image;
            $this->price = $price;
            $this->miles = $miles;
            $this->color = $color;
        }
        function setPrice($new_price)
        {
          $this->price = $new_price;
        }

        function getPrice()
        {
          return $this->price;
        }



        function setMakeModel($make_model)
        {
          $this->make_model = $make_model;
        }

        function getMakeModel()
        {
          return $this->make_model;
        }



        function setImage($image)
        {
          $this->image = $image;
        }

        function getImage()
        {
          return $this->image;
        }


        function setMiles($miles)
        {
          $this->miles = $miles;
        }

        function getMiles()
        {
          return $this->miles;
        }



        function setColor($color)
        {
          $this->color = $color;
        }

        function getColor()
        {
          return $this->color;
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
            $price = $car->getPrice();
            $make_model = $car->getMakeModel();
            $image = $car->getImage();
            $miles = $car->getMiles();
            $color = $car->getColor();
                echo "<li> $make_model </li>";
                echo "<li><img src= $image ></li>";
                echo "<ul>";
                    echo "<li> $$price </li>";
                    echo "<li> Miles: $miles </li>";
                    echo "<li> Color: $color </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
