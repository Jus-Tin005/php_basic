<?php
// class & object

/*
! Step One
*/





// method 1
// class Artist{
//         public $firstname;

//         public function getdata(){
//                 $this -> firstname = "Khun Tun";
//         }

//         public function showdata(){
//                 echo $this -> firstname;
//         }
// }

// $a = new Artist();
// $a -> getdata();
// $a -> showdata();



// method 2

// class Artist{
//         public $firstname;

//         public function __construct(){  // double dash
//                 $this -> firstname = "Nang Kin Zay Ya";
//         }

//         public function showdata(){
//                 echo $this -> firstname;
//         }
// }

// $a = new Artist();
// $a -> showdata();



// method 3

// class Artist{
//         public $firstname;

//         public function __construct(){
//                 $this -> firstname = "Daw Win Wah";
//         }

//         public function getdata(){
//                 $this -> firstname = "khain"; // getdata() function overwrite __construct() function
//         }

//         public function showdata(){
//                 echo $this -> firstname;
//         }
// }

// $a = new Artist();
// $a -> getdata();
// $a -> showdata();




/*
! Step Two
*/



class Artist {

        // declaration
        public $firstname;
        public $lastname;
        public $birthDate;
        public $birthCity;
        public $DeathDate;

                                // 5 para
       public function __construct($firstname,$lastname,$city,$birthDate,$DeathDate){
                $this -> firstname = $firstname;
                $this -> lastname = $lastname;
                $this -> birthCity = $city;
                $this -> birthDate = $birthDate;
                $this -> deathDate = $DeathDate;
        }

        public function getdata() {
                $this -> firstname = "Aung Aung";
        }


        public function show() {
                $show = "<table border='1'>";
                $show = "<tr><th colspan='2'>";
                $show = $this -> firstname . " " . $this -> lastname;
                $show = "</th></tr>";
                $show = "<tr><td>Birth:</td>";
                $show = "<td>" . $this -> birthDate . "(" . $this -> birthCity . ")</td></tr>";
                $show = "<tr><td>Death:</td>";
                $show = "<td>" . $this -> deathDate . "</td></tr>";
                $show = "</table>";
                // echo $show; // method 1
                return $show;  // method 2
        }
}
                                // 5 para
        $khuntun = new Artist("Pobba","Ronaldo","Malala","2021","2022");
        // $khuntun -> show(); // method 1
        echo $khuntun -> show(); // method 2

        echo "<hr>";

        $nanghnin = new Artist("yoo","shoo","hoo","34","567");
        echo $nanghnin -> show();

        echo "<hr>";

        $jkrollong = new Artist("mg","kg","koo","2333","908");
        echo $jkrollong -> show();

        // can build more objects





?>