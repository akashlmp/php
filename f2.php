<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        Enter First Number : 
        <input type="number" name="n1">
        <br><br>
        Enter Second Number : 
        <input type="number" name="n2">
        <br><br>
        <input type="radio" name="op" value="add"> +
        <input type="radio" name="op" value="sub"> - 
        <input type="radio" name="op" value="mult"> *
        <input type="radio" name="op" value="div"> /
        <br><br>
        <input type="submit" value="Submit" name="calc">
    </form>
    <?php
    function cal($x , $y , $op){
        if ($op=='add') {
            return $x+$y;
        }
        elseif ($op == 'sub') {
            return $x-$y;
        }
        elseif ($op == 'mult') {
            return $x*$y;
        }
        elseif ($op == 'div') {
            return $x/$y;
        }
        else {
            return "Please Select opetration !";
        }
    }
    if (isset($_POST['calc'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $op = $_POST['op'];
        echo cal($n1 ,$n2 , $op);
    }
    ?>
</body>
</html>