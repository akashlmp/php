<?php
function add($x,$y){
    return ($x+$y);
}
// echo add(100,200);

if (isset($_POST['calc'])) {
    $n1= $_POST['n1'];
    $n2= $_POST['n2'];
    echo add($n1,$n2)."<br>";
}
?>
<form method="post">
    Enter First number :
    <input type="number" name="n1"> <br><br>
    Enter Second number :
    <input type="number" name="n2"> <br><br>
    <input type="submit" value="Submit" name="calc">
</form>