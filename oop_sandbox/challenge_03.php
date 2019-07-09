<?php

class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    protected $wheels = 2;
    private $weight_kg = 0.0;
    
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

    public function wheel_details() {
        $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
        return "It has " . $wheel_string . ".";
    }
    
}

class Unicycle extends Bicycle {

    protected $wheels = 1;

    // public function bug_test() {
    //     return $this->weight_kg;
    // }

}

$bicycle1 = new Bicycle;
$unicycle1 = new Unicycle;

echo $bicycle1->wheel_details() . "<br />";
echo $unicycle1->wheel_details() . "<br />";
echo $unicycle1->get_weight_kg() . "<br />";

$unicycle1->set_weight_kg(20);
echo $unicycle1->get_weight_kg() . "<br />";


// echo $uni->bug_test() . "<br />";

?>