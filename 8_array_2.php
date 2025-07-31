<?php
    $stack = array("orange","banana");
    array_push($stack,'apple');
    print_r($stack);
    echo '<br>';
    $stack1 = array(array_pop($stack));
    print_r($stack1);
    echo '<br>';
    $stack2 =array_merge($stack, $stack1);
    print_r($stack2);
    echo '<br>';
    $stack3 = array_reverse($stack2, true);
    print_r($stack3);
    echo '<br>';
    $stack4 = array_reverse($stack2);
    print_r($stack4);
    echo '<br>';
    $a = array(2,4,6,8,3,9,10,'fdsfs');
    $stack5 = array_sum($a);
    echo "sum of stack5= $stack5";
    echo '<br>';
    $b = array('abc','def','ghi');
    $stack6 = array_sum($b);
    echo "sum of stack5= $stack6";
    $alpha = implode(" ", $b);
    echo "<br>";
    echo "alpha staring = $alpha";
    $alpha = implode(",", $a);
    echo "<br>";
    echo "alpha staring = $alpha";
    echo "<br>";
    $pieces=explode(",",$alpha);
    echo $pieces[0]; // piece1
    echo "<br>";
    echo $pieces[1]; // piece2
    echo "<br>";
    print_r($pieces);
?>  
