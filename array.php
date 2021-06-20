<h1>Array</h1>
<?php
    $coworkers = array('egoing', 'leezche', 'duru', 'taeho');
    echo $coworkers[1].'<br>';
    echo $coworkers[3].'<br>';
    var_dump(count($coworkers));
    echo '<br>';
    array_push($coworkers, 'graphittie');
    echo '<br>';
    var_dump($coworkers);
?>