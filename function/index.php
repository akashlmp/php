<!-- 
    Function  : function is a named block of code which perform specific task. if you have a block of code which required at diffrent locations of program then you can create a function of that code and call it from desired loctions.

    function in php is created by using function keyword followed by function name.

    function functionName(parameters){
        //code
    
    we can create function in four ways as per our requirement :-
    1. No parameters and no return values.
    2. No return types but parameters.
    3. with parameters and with return type.
    4. NO parameters but return type .
    
 -->
<!-- Write a function to find sum of two numbers  -->

<?php
function add($x,$y){
    return ($x+$y);
}
echo add(10,20)."<br>";
echo add(100,200); 
?>