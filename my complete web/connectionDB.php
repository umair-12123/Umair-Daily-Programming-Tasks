<?php
$hostName = "localhost";
$DBName = "myWeb";
$DBPassword = "Umair@123";
$userName = "root";

$connection = mysqli_connect($hostName, $userName, $DBPassword, $DBName);

if ($connection) {
?>
    <script>
        alert("Connection successful");
    </script>
<?php
} else {
?>
    <script>
        alert("Error during connection");
    </script>
<?php
}
?>
