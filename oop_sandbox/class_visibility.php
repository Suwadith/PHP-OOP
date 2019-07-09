<?php

class Student {

    public $first_name;
    public $last_name;
    public $country = 'None';

    protected $registration_id;
    private $tuition = 500.00;

    public function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

    public function hello_world() {
        return 'Hello World!';
    }

    protected function hello_family() {
        return 'Hello Family!';
    }

    private function hello_me() {
        return 'Hello Me!';
    }

    public function tuition_fmt() {
        return '$' . $this->tuition;
    }

}

class PartTimeStudent extends Student {

    public function hello_parent() {
        return $this->hello_family();
    }

}

// $student1 = new Student;
$student1 = new PartTimeStudent;
$student1->first_name = 'Paul';
$student1->last_name = 'Joyce';

echo $student1->full_name() . "<br />";

echo $student1->hello_world() . "<br />";

echo $student1->hello_parent() . "<br />";

// echo $student1->hello_family() . "<br />";
// echo $student1->hello_me() . "<br />";
// echo $student1->registration_id;

//Overloading (Not really, more like dynamic properties.(Coz it works for even undefined variables) but hey, that's what php calls it)
//This actually can create confusion coz we aren't really accessing the private property of the parent class here. THis is actually a new property of the sub-class
$student1->tuition = 1000;
echo $student1->tuition . "<br />";

//This proves it.
echo $student1->tuition_fmt() . "<br />";

?>