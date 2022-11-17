<?php

// __construct Function


// Notice that the construct function starts with two underscores (__)!


// step 1


class Beauty {
        public $name;
        public $color;

        function __construct($name) {  // notice here
                $this -> name = $name;
        }

        function get_name(){
                return $this -> name;
        }

}


$sunscreen = new Beauty("Sunscreen");  // notice here
echo $sunscreen -> get_name() . "<br><br>";



// step 2

class Phones {
        public $name;
        public $color;

        function __construct($name,$color) {
                $this -> name = $name;
                $this -> color = $color;
        }

        function get_name() {
                return $this -> name;
        }

        function get_color() {
                return $this -> color;
        }
}


$huawai = new Phones("Huawai","Silver");
echo $huawai -> get_name() . "<br>";
echo $huawai -> get_color() . "<br><br>";


?>