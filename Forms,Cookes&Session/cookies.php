<!-- 
    Cookies are information that you can store at clients browser . 
    advantage - 
    Store information and capture the user actions on the web page inside it.
 -->
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>

<body>
    <h1>Cookies</h1>
    <?php
    $cookie_name = "user";
    $cookie_value = "php";
    setcookie($cookie_name,$cookie_value,time()+(89756 *23),"/");
    if(!isset($_COOKIE[$cookie_name])){
        echo " not seted ".$cookie_value . "Nice ot meet you";
    }else{
        echo "seted ".$cookie_value . "you are backs Nice ot meet you <br> the value is ".$_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>