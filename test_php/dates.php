<?php
/**
 * Created by PhpStorm.
 * User: andrewvm
 * Date: 16/01/18
 * Time: 5:50 PM
 */


//    echo date('d');
//    echo date('m');
//    echo date('Y');
//    echo date('l');
    $dateFormats = ['d', 'm', 'Y', 'l'];
    forEach($dateFormats as $dateFormat){
        echo date($dateFormat) . '<br>';
    }

//    echo date('Y/m/d');

    // Set Time Zone
    date_default_timezone_set('US/Hawaii');

    $timeFormats = ['h', 'i', 's', 'a'];
    foreach ($timeFormats as $timeFormat){
        echo date($timeFormat) . ' ';
    }

    echo '<br>' . date('h:i:sa');


?>