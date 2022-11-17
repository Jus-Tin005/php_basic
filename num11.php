
<?php



// mail() Function

// mail() function para = Email address/subject/message/CC or BC adddresses

// mail across Simple Transmission Protocol(SMTP).

// boootstarp plugin = Bootstrap  WYSIWYG  Editor


if(isset($_POST['btnsend'])){
        $to = $_POST['emailto'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

         // ( optional )
        $from = "From :" . $_POST['emailfrom'] . "\r \n";  // \r \n = next line
        $from .= "CC:Khuntun777@gamil.com \r \n";   //
        $from .= "MIME-Version: 1.0" . "\r\n";
        $from .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $mailreach = mail($to,$subject,$message,$from);

        if($mailreach == true) {
                echo "<script>alert('Mail sent successfully !')</script>";
        }else {
                echo "<script>alert('Mail not sent yet !!!')</script>";
        }
}


/*
! PHP Assignment Operator not including JS :-

! Exponentiation = **
! Not equal = <>
! Spaceship = <=>

? the same = and,or,xor

? The same
! Concatenation = .
! Concatenation assignment = .=

! Null coalescing = ??


*/






?>














<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>mail</title>
        <!-- bs  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- tinymce  -->
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>

        <!-- custom form  -->
        <div class="container">
                <h3>Email Sending</h3>
                <form action="" method="post">
                        <div class="form-group">
                                <p>To : <input type="email" name="emailto" id="" class="form-control"></p>
                                <p>Subject : <input type="text" name="subject" class="form-control"></p>
                                <p>From : <input type="email" name="emailfrom" class="form-control"></p>
                                <label>Messages :</label>
                                <div class="form-group">
                                        <textarea id="editor" name="message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" name="btnsend">Submit</button>

                        </div>
                </form>
        </div>







<!-- jq -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
<!-- bs css js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">


                tinymce.init({
                selector: 'textarea#editor',
                skin: 'bootstrap',
                plugins: 'lists, link, image, media',
                toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
                menubar: false,
                });

</script>
</body>
</html>