PHP = Hypertext Preprocessor ( programming language) / loosely typed language

loosely typed language = can overwrite everything if not define variable as constant.
ex:- $a = 1;
     $a = 4;
     echo $a; output = 4

JS = design
php = development(transition,web flow,) = working 3 - sequence,selection,iteration

PHP code is embedded into HTMl. (need php extension)


PHP working Process :-
Web Browser => http request => php web server => http response => index.php(html document)


php syntax
<html>
        <body>
                <?php

                                // echo "codes"; // echo = to show web browser

                                $my_var3 = 1;
                                echo $my_var3; // output = 1 ( integer data type,not number data type)


                                // Type casting (converting a variable or value)

                                $a = 1;
                                $b = 1.5;
                                $c = $a + $b;   // 2.5
                                $c = $a + (int) $b; // $a = 1 / $b 1(not 1.5 cuz integer data type is -1,0,30 and 1.5 is floating point data type.)
                                echo $c;  // 2
                                var_dump($c);


                                // differences echo and var_dump()
                                $d = 1;
                                var_dump($a);
                                $e = 1.5;
                                var_dump($b);
                                $f = "My name is PHP";
                                var_dump($f);
                                $g = true;
                                var_dump($g);

                                // var_dump() = output data type nad value both. ( use it type casting)
                                // echo = only data type ( use it in web server. )


                ?>


        </body>
</html>


Variable in php = $my-var1 / $my_var2


Data Types in PHP

1.string = Alphanumeric characters
2.integers = whole numbers (-3,0,80)
3.Floating points = numbers with decimal points
4.Boolean = true and false value


Can save maximun integer data type value in PHP
<?php
        echo PHP_INT_MAX;
?>

output = 9223372036854775807

32 bit = 2 billion
64 bit = larger values

