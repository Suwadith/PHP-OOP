<?php

class Student {

    var $first_name;
    var $last_name;
    var $country = 'None';

    function say_hello() {
        return 'Hello World!';
    }

    function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

}

$student1 = new Student;
$student1->first_name = 'Paul';
$student1->last_name = 'Joyce';

$student2 = new Student;
$student2->first_name = 'Sam';
$student2->last_name = 'Hodiak';

echo $student1->full_name() . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";

echo $student1->say_hello(). "<br />";
echo $student2->say_hello(). "<br />";

$class_methods = get_class_methods('Student');
echo "Class methods:" . implode(', ', $class_methods) .  "<br />";


if(method_exists('Student', 'say_hello')) {
    echo "Method say_hello() exists in Student class. <br />";
} else {
    echo "Method say_hello() does not exist in Student class. <br />";
}

?>