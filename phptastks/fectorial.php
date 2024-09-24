<?php 
if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $fac = 1; 
    $facc = 1;
    if($id < 0) {
        echo "Factorial is not defined for negative numbers.";
    } elseif ($id == 0) {
        echo "The factorial of 0 is 1.";
    } else
     {
            for($i = 1; $i <= $id; $i++){
            $fac = $fac * $i;
        }
        echo "factorial of $id using for loop: $fac";
 $j = 1;
        while($j<=$id){
            $facc = $facc * $j;
            $j++;
        }
        echo "<br><br><br>factorial of $id using while loop : $facc <br><br><br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
</head>
<body>
    <form action="" method="POST">
        <label for="id">Input a Number for Fectorial</label>
        <input type="number" name="id" id="id">
        <input  type="submit" name="submit">
    </form>
</body>
</html>