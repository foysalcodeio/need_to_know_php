<?php
    
    date_default_timezone_set('Asia/Dhaka');
    $current_time = date('Y-m-d H:i:s');

    echo $current_time;

    echo "\n";
    echo "<br>";
    echo "Get list available time:\n";
    $timeZone = dateTimeZone::listIdentifiers();
    //print_r($timeZone);
    foreach($timeZone as $key => $val){
        echo $key . ": " . $val . "\n";
        echo "<br>";
    }
?>