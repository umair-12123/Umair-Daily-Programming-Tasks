<?php 
$num = array(1, 2,3);
var_dump($num);
$cars = ["Volvo", "BMW", "Toyota"]; //also declare array with this methodd
var_dump($cars);
echo $num[1]; //access array by index
array_push($num, 4);
var_dump($num);
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"]; //associative aray  access and assign value by name
function myFunction() {
    echo "I come from a function!";
  }
  
  $myArr = array("Volvo", 15, myFunction());//we can also use function as aray
  
  $myArr[2]();//use () for access fun araay 
  $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {//loop through an assosiative aray
  echo "$x: $y <br>";
}
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
} //loop thorugh an indexd array
//updat aray item
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
//update item to a associative array
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
//add multipule items 
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

//Output the array:
var_dump($fruits);
?>