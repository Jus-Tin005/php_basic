<?php

// class & object


/*
! syntax
? class className {
?              definition;  ( declare variablr)
?              operation;   (method,function)
?
?            }
?       objectName = new className();
?       objectName ->
*/


/*
! fatal error ( function is called but the definition of function is not available. So it gives error. )
*/

class Artist {
        // declaration
        public $firstname;
        public $lastname;
        public $birthDate;
        public $birthCity;
        public $DeathDate;


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
                return $show;   // not return
        }
}

                // object

                $art = new Artist();
                // $art = new Artist("Aye");
                $art -> getdata();
                echo $art -> show();



               /*  $p = new Artist("Pablo","Picasso","Malaga","1881","1973") ;
                $aa = new Artist("AA","BB","CC","1997","2000");
                $p1 = new Artist("Pablo","Picasso","Malaga","1881","1973");
                $aa1 = new Artist("AA","BB","CC","1997","2000");

                $p -> getname();
                echo $p -> show();
                echo "<hr>";

                echo $aa -> show();
                echo "<hr>"; */





?>