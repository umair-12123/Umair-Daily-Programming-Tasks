<?php
if (isset($_POST["submit"])){
    $number = $_POST["day"];
switch($number){
    case 1:
        echo " today is monday";
        break;
        case 2:
            echo " today is tue";
            break;
            case 3:
                echo " today is wed";
                break;
                case 4:
                    echo " today is thu";
                    break;
                    case 5:
                        echo " today is fri";
                        break;
                        case 6:
                            echo " today is saturday";
                            break;
                            case 7:
                                echo " today is sun";
                                break;
                                default:
                                echo "invalid input";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="" >put a day number</label>
        <input type="number" name="day">
        <input type="submit" name="submit">
    </form>
</body>
</html>