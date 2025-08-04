<?php 
    $subject = ['HTML','CSS','JAVASCRIPT','PHP','WORDPRESS'];

    $subject_as_string = implode(" ",$subject);
    echo "<br/> $subject_as_string";

    $s1 = join(" ",$subject);
    echo "<br/> $s1";
    print("<br/>$s1");

    // $sentence = "we should daily eat pizza, sandwitch and burger and drink cocacola";

    // $bad_words = ['pizza','sandwitch','burger','cocacola'];
    // $good_words = ['apple','banana','mango','coconut water'];

    // echo "<br/> before replacement sentence = $sentence";
    // $sentence = str_replace($bad_words,$good_words,$sentence);
    // echo "<br/> after replacement sentence = $sentence";
?>  