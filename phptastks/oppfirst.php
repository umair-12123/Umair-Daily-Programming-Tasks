<?php 
class Fruits {
    public $name;
    public $color;

    // Set the name of the fruit
    function set_name($name) {
        $this->name = $name;
    }

    // Get the name of the fruit
    function get_name() {
        return $this->name;
    }
    function set_color($color) {
        $this->color = $color;
      }
      function get_color() {
        return $this->color;
      }
}

$apple = new Fruits();
$banana = new Fruits();
$apple->set_name('apple');
$apple->set_color('Red');
$banana->set_name('banana');
$apple->set_color('Red');

echo $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>
