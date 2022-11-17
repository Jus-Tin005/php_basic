<?php

 // array


// 1. Numeric Array

// $families = array();
// $families[0] = "Peter";
// $families[1] = "Lois";
// $families[2] = "Glenn";


$families = array("Peter","Lois","Glenn"); // numeric array

echo $families[0] ."<br>";
echo $families[1] ."<br>";
echo $families[2] ."<br>";

echo "<br><br>";


// for (init counter; test counter; increment counter) {
//         code to be executed for each iteration;
//       }

// $arrlen = count($families);
// for($i = 0; $i < $arrlen; $i++){     // parse error here
//         echo $families[$i] . "<br>;
// }


// 2. Associative Array ( key => value)

// foreach ($array as $value) {
//         code to be executed;
//       }

$food = array("Category" => "noodle", "Qty" => 30, "Price" => 500, "Total" => 13000);

// notice = forEach = js / foreach = php
foreach($food as $x => $xvalue){
 echo $x . " = " . $xvalue . "<br>";
}


echo "<br><br>";


// 3. Multidimensuonal array

// method 1
$families = array("griffin" => array("one" => "Moe", "Two" => "Lwin","Three" => "Aung"),  // idx 1
                  "AA"      => array("Four" => "Maung", "Five" => "BB", "Six" => "CC")); // idx 1 next

                /*
                ! error here
                */
                //   "ko tun"   => array("Nang" => 23),  // idx 2
                //   "Brown"    => array("John" => 23, "Hanna" => 29,"Tee Tos" => 27) // idx 3


                echo $families['griffin']['one'] . "<br>";
                echo $families['AA']['Six'] . "<br>";
                echo "Is " . $families['griffin']['one'] . " and " . $families['griffin']['Two'] . " a part of the griffin family ? <br><br>";

                print_r($families); // chec how to asssign keys and values

                echo "<br><br>";


                /*
                ! error here
                */
                // echo $families[0][0] . "is" . $families[0][1] . "years old. <br><br>";  // error
                // echo $families[1][0] . "is" . $families[1][1] . "years old. <br><br>";
                // echo $families[2][0] . "is" . $families[2][1] . "years old. <br><br>";


                foreach($families as $x){

                        foreach($x as $val){
                                echo $val . "<br>";
                        }

                }



// method 2
$familiesTwo = array(array("Haythar", 45), array("You Nan Da", 23), array("San Lwin", 35));


echo "<br><br>";



// 4. in_array

$names = array("May", "July", "August", "AA");

if(in_array("May", $names)){
        echo "Found !";
}else{
        echo "Not Found !";
}


echo "<br><br>";


/*
! array to string
*/

// implode(symbol,variale);
$str = array("This", "is", "a", "string");
$str2 = implode(" ", $str);
echo $str2 . "<br><br>";


/*
! string to array
*/

// 2. explode(symbol or character,variable);

$str3 = "This is an array";
$strarray = explode("i",$str3);
print_r($strarray);



echo "<br><br>";


/*
! combine array
*/

//arrary_merge();

$array1 = array(0 => "zero", 2 => "two", 3 => "three");
$array2 = array(1 => "one", 3 => "three", 4 => "four");
$array3 = array_merge($array1,$array2);
var_dump($array3);


echo "<br><br>";










?>