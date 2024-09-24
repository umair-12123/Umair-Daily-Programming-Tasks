<?php 
if(isset($_POST["Check"]))
{
    echo "<b> check by If else </b> <br>";
    $grade = $_POST["grade"]; 
    $Agrade = $grade >= 60;
    $bgrade = $grade >= 45 && $grade <= 59;
    $cgrade = $grade >= 33 && $grade <= 44;
    $fail = $grade < 33;
    if($Agrade){
        echo "Your marks are $grade and your Grade is First Division";
    } elseif($bgrade){
        echo "Your marks are $grade and your Grade is Second Division";
    } elseif($cgrade){
        echo "Your marks are $grade and your Grade is Third Division";
    } elseif($fail){
        echo "Your marks are $grade and you have Failed";
    } else {
        echo "Invalid input";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Grade</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Enter Marks: </label><input type="number" name="grade" required>
        <input type="submit" name="Check" value="Check Grade">
    </form>
</body>
</html>
<?php 
if(isset($_POST["Check"]))
{
    echo " <b> check by switch statment </b> <br>";
    $grade = $_POST["grade"]; 
    switch (true) {
        case ($grade >= 60):
            echo "Your marks are $grade and your Grade is First Division";
            break;
        case ($grade >= 45 && $grade <= 59):
            echo "Your marks are $grade and your Grade is Second Division";
            break;
        case ($grade >= 33 && $grade <= 44):
            echo "Your marks are $grade and your Grade is Third Division";
            break;
        case ($grade < 33):
            echo "Your marks are $grade and you have Failed";
            break;
        default:
            echo "Invalid input";
            break;
    }
}
?>
