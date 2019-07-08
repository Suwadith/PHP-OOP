<?php

class User {

    var $first_name;
    var $last_name;
    var $username;

    function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

}

class Customer extends User {

    var $is_admin = false;
    var $city;
    var $state;
    var $country;

    function location() {
        return $this->city . ", " . $this->state . ", " . $this->country;
    }

}

class AdminUser extends User {
    var $is_admin = true;

    function full_name() {
        return $this->first_name . " " . $this->last_name . " (Admin)";
    }


}

$u = new User;
$u->first_name = 'Lionel';
$u->last_name = 'Messi';
$u->username = 'leomessi';


$c = new Customer;
$c->first_name = 'Neymar';
$c->last_name = 'Junior';
$c->username = 'neymarjr';
$c->city = 'Paris';
$c->state = 'Paris';
$c->country = 'France';

$a = new AdminUser;
$a->first_name = 'Suwadith';
$a->last_name = 'Srithar';
$a->username = 'suwadith';

echo $u->full_name() . "<br />";
echo $c->full_name() . "<br />";
echo $a->full_name() . "<br />";

echo $c->location() . "<br />";

echo get_parent_class($u) . "<br />";
echo get_parent_class($c) . "<br />";

if(is_subclass_of($c, 'User')) {
    echo "Instance is a subclass of User. <br />";
}

$parents = class_parents($c);
echo implode(', ', $parents) . "<br />";

?>