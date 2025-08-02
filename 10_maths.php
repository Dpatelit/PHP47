<?php 
    // //maths related library functions
    // $num = rand(-10,10);
    // echo "<br/> any random number between -10 and 10 $num";

    // //get absolute value num 
    // echo "<br/> absolute value of $num = " . abs($num);
     // $a = 3.5;
    // $b = 2.5;
    // echo "round(3.5)". round($a);
    // echo "round(2.5)". round($b);
    $amount = 123.45678;
    echo "<br/> ceil value of $amount = " . ceil($amount);
    echo "<br/> floor value of $amount = " . floor($amount);

    echo "<br/> round value of $amount = " . round($amount,2);
    echo "<br/> round value of $amount = " . round($amount,1);
    echo "<br/> round value of $amount = " . round($amount,0);
    echo "<br>";
    echo pi();

    $base = 2;
    $exponent = 10;
    $result = pow($base,$exponent);
    echo "<br/> 2 ^ 10 = $result ";
    echo "<br>";
    echo rand(10,15);
    echo "<br>";
    echo min(2,3,1,6,7);// 1
    echo "<br>";
    echo min(array(2,4,5));// 2
    echo "<br>";
    echo max(2,3,1,6,7);// 7
    echo "<br>";
    echo max(array(2,4,5));// 5
    echo "<br>";
    $s='12500';
    printf("[%s]\n",$s); //standard string output
    printf("[%10s]\n",$s); //right-justification with spaces
    printf("[%-10s]\n",$s); //left-justification with spaces
    printf("[%010s]\n", $s);//zero-padding works on strings too
    printf("[%'#10s]\n", $s); // use the custom padding character'#'
?>