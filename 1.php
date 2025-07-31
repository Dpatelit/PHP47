<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            echo "The Easy Learn Academy";
            $color = 'yellow';
        ?>
    </title>
</head>
<body bgcolor="<?php echo $color; ?>">
<?php 
//start of php script
    echo "we have started learning php @ The Easy Learn Academy";
    echo "<br/>  <b>PHP</b> is easy to learn and use";

    print("<br/> print function is also used to print message.");

    printf("<br/> it is also used to print output");

    //how to create variables
    //syntax 
    //$variablename = value;
    $class = "The Easy Learn Academy";
    $year = 2025;
    $pi = 3.14;
    $isGovermentCourse = false;
    echo "<br/> class = $class year = $year pi = $pi is Goverment Course = $isGovermentCourse";
    $class = 100;
    $year = 'two thousand twenty five';
    $pi = true;

    print "<br/> class = $class year = $year pi = $pi is Goverment Course = $isGovermentCourse";

    printf("<br/> class %d year %s ",$class,$year);
/* end of php script */ 
?>
</body>
</html>