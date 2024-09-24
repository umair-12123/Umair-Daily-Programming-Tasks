<?php 
$person = array(array('Ali', 'raza'), array('amir','ali'), array('haroon','sultan'));
echo "first name:  ". $person[0][0]. "  last name:  " . $person[0][1]. "<br>";
echo "first name:  ". $person[1][0]. "  last name:  " . $person[1][1]. "<br>";
echo "first name:  ". $person[2][0]. "  last name:  " . $person[2][1]. "<br>";
$personn = array(array('Ali', 'raza', 18), array('amir','ali', 19), array('haroon','sultan', 17));
echo "print using for loop <br> <br> <br>";
for( $i = 0; $i < 3; $i++ ){ //i means row
    echo "row numbers " . $i;
    echo "<ul>";

    for( $j = 0; $j < 3; $j++ ){  //j means column
       echo "<li> ".$personn[$i][$j]. "</li>";
    }
     echo "</ul>";
}


?>