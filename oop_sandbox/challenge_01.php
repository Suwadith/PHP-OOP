<?php

class Bicycle {

    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg = 0.0;

    function name() {
        return $this->brand . " - " . $this->model . " - " . $this->year;
    }

    function weight_lbs() {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    function set_weight_lbs($weight_in_lbs) {
        $this->weight_kg = floatval($weight_in_lbs) / 2.2046226218;
    }
    
}

$bicycle1 = new Bicycle;
$bicycle2 = new Bicycle;

$bicycle1->brand = 'Yamaha';
$bicycle1->model = 'XYZ';
$bicycle1->year = '2015';
$bicycle1->description = 'Revs Your Heart';
$bicycle1->weight_kg = 50;

echo $bicycle1->name() . "<br />";
echo $bicycle1->weight_lbs() . " lb<br />";
echo $bicycle1->weight_kg . " kg<br />";
$bicycle1->set_weight_lbs(80);
echo $bicycle1->weight_lbs() . " lb<br />";
echo $bicycle1->weight_kg . " kg<br />";
echo "<br />";

$bicycle2->brand = 'Honda';
$bicycle2->model = 'WMX';
$bicycle2->year = '2018';
$bicycle2->description = 'You meet the nicest people on a Honda';
$bicycle2->weight_kg = 80;

echo $bicycle2->name() . "<br />";
echo $bicycle2->weight_lbs() . " lb<br />";
echo $bicycle2->weight_kg . " kg<br />";
$bicycle2->set_weight_lbs(110);
echo $bicycle2->weight_lbs() . " lb<br />";
echo $bicycle2->weight_kg . " kg<br />";

?>