<?php

class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description;
    public $gender;
    public $price;
    protected $weight_kg;
    protected $condition_id;
    public const CATEGORIES = ['road', 'mountain', 'hybrid', 'cruiser', 'city', 'BMX'];
    public const GENDERS = ['mens', 'womens', 'unisex'];
    protected const CONDITION_OPTIONS = [
        1 => 'Beat up', 
        2 => 'Decent', 
        3 => 'Good', 
        4 => 'Great', 
        5 => 'Like New'
    ];

    public function __construct($args=[]) {
        $this->brand = $args['brand'] ?? '';
        $this->model = $args['model'] ?? '';
        $this->year = $args['year'] ?? '';
        $this->category = $args['category'] ?? '';
        $this->color = $args['color'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->gender = $args['gender'] ?? '';
        $this->price = $args['price'] ?? 0;
        $this->weight_kg = $args['weight_kg'] ?? 0.0;
        $this->condition_id = $args['condition_id'] ?? 3;


        //easier way to automate construct method (common way)
        //caution: allows private/protected properties to be set
        // foreach($args as $k => $v) {
        //     if(property_exists($this, $k)) {
        //         $this->$k = $v;
        //     }
        // }

    }

    public function weight_kg() {
        return number_format($this->weight_kg, 2) . " kg";
    }

    public function set_wight_kg($value) {
        $this->weight_kg = floatval($value);
    }

    public function weight_lbs() {
        return number_format($this->weight_kg * 2.2046226218, 2) . " lbs";
    }

    public function set_weight_lbs($value) {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }

    public function condition() {
        if($this->condition_id > 0) {
            return self::CONDITION_OPTIONS[$this->condition_id];
        } else {
            return "Unknown";
        }
    }

}

?>