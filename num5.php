<?php

// passing data method 1

// echo "Welcome " . $_REQUEST['fname'] . "<br>";
// echo "You are " . $_REQUEST['age'] ." years old. <br><br>";
// echo $_REQUEST['test'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Passing Data in PHP</title>
</head>
<body>

<!--  passing data method 2-->
Welcome <?php echo $_POST['fname']; ?> <br/>
You are <?php echo $_POST['age']; ?> years old. <br>

<?php echo $_REQUEST['pname']; ?>  <!-- $_REQUEST = pass custom para  -->


</body>
</html>





<!-- get = $_GET/ $_REQUEST
     post = $_POST /  $_REQUEST
-->