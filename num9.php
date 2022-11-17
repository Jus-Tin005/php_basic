<?php

// class and object

// Note: In a class, variables are called properties and functions are called methods!

// step 1

class fruit {

        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name) {
                $this -> name = $name;
        }

        function get_name() {
                return $this -> name;
        }
}


// Classes are nothing without objects!


// step 2

class Meals {

        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name){
                $this -> name = $name;
        }

        function get_name() {
                return $this -> name;
        }
}


// objects

$meat = new Meals();
$fish = new Meals();
$meat -> set_name("Meat");
$fish -> set_name("Fish");

echo $meat -> get_name();
echo "<br>";
echo $fish -> get_name();



// step 3

class Drinks{

        // Properties
        public $name;
        public $color;

        // Methods

        function set_name($name) {
                $this -> name = $name;
        }

        function get_name() {
                return $this -> name;
        }

        function set_color($color) {
                $this -> color = $color;
        }

        function get_color(){
                return $this -> color;
        }

}

echo "<br><br>";

// object

$mountain = new Drinks();
$mountain -> set_name("Mountain");
$mountain -> set_color("Red");

echo "Name : " . $mountain -> get_name();
echo "<br>";
echo "Color : " . $mountain -> get_color();



echo "<br><br>";


/*
!  tips for $this keyword
*/


// The $this keyword refers to the current object, and is only available inside methods.


// step 1
class FruitTwo {
        public $name;
      }
      $apple = new Fruit();



// step 2

/*
! Using $this keyword method 1
*/
// 1. Inside the class (by adding a set_name() method and use $this):
class FruitThree {
        public $name;
        function set_name($name) {
          $this->name = $name;
        }
      }
      $apple = new FruitThree();
      $apple->set_name("Apple");

      echo $apple->name;

      echo "<br><br>";



// Method 2
// Outside the class (by directly changing the property value):

class FruitFour {
        public $name;
      }
      $apple = new FruitFour();
      $apple->name = "Pineapple"; // notice here.

      echo $apple->name;


      echo "<br><br>";


// instanceof keyword


$mengo = new FruitFour();
var_dump($mengo instanceof FruitFour); // output = bool(true)



?>