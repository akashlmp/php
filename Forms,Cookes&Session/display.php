<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form
        get
    </h1>
    <a href="./GetForms.php">Back to home</a>
    <?php 
    /*
    $name = $_GET['input_text'];
    $email = $_GET['input_email'];
    echo "name : $name and eamil : $email";*/
    ?> 
    <?php
    $name = $_POST['input_text'];
    $email = $_POST['input_email'];
    echo "name : $name and eamil : $email";
    ?>
</body>
</html>