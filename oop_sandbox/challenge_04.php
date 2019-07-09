<?php

class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    protected static $wheels = 2;
    private $weight_kg = 0.0;
    public static $instance_count = 0;
    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
    public $category;
    
    public function name() {
        return $this->brand . " - " . $this->model . " - " . $this->year;
    }

    public function set_weight_kg($value) {
        $this->weight_kg = floatval($value);
    }

    public function get_weight_kg() {
        echo $this->weight_kg . " kg";
    }
    
    public function weight_lbs() {
        return floatval($this->weight_kg) * 2.2046226218 . " lbs";
    }
    
    public function set_weight_lbs($weight_in_lbs) {
        $this->weight_kg = floatval($weight_in_lbs) / 2.2046226218;
    }

    public static function wheel_details() {
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
        return "It has " . $wheel_string . ".";
    }

    public static function create() {
        $class_name = get_called_class();
        $obj = new $class_name;
        // $obj = new static                      //can use static & self too
        self::$instance_count++;
        return $obj;
    }
    
}

class Unicycle extends Bicycle {

    protected static $wheels = 1;

}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

echo 'Bicycle count: ' . Bicycle::$instance_count . '<br />';
echo 'Unicycle count: ' . Unicycle::$instance_count . '<br />';

$bike = Bicycle::create();
$uni = Unicycle::create();

echo 'Bicycle count: ' . Bicycle::$instance_count . '<br />';
echo 'Unicycle count: ' . Unicycle::$instance_count . '<br />';

echo "<hr />";
echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . '<br />';
$trek->category = Bicycle::CATEGORIES[0];
echo 'Category: ' . $trek->category . '<br />';

echo "<hr />";

echo "Bicycle: " . Bicycle::wheel_details() . "<br />";
echo "Unicycle: " . Unicycle::wheel_details() . "<br />";

?>