<?php
/**
 * Created by PhpStorm.
 * User: andrewvm
 * Date: 16/01/18
 * Time: 11:00 AM
 */

# Loop Types
/*
 * For
 * While
 * Do .. While
 * Foreach
 *
 * */

    # For loop
    # @params - init, condition, inc

    for($i = 0; $i < 10; $i++){
//        echo $i;
//        echo '<br>';
    }



    # While loop
    # @params - condition
    $j = 0;
    while($j < 11){
//        echo "$j $j";
//        echo '<br>';
        $j++;
    }



    # Do .. While
    # @params - condition

    $k = 0;
    do{
//        echo "$k $k $k";
//        echo '<br>';
        $k++;
    }
    while($k < 10);




    # Foreach Loop - For arrays
    $people = array('Brad', 'Jose', 'William');

    foreach($people as $person){
        echo $person . '<br>';
    }

    $contacts = array(
        'Brad' => 'abc@gmail.com',
        'Jose' => 'def@gmail.com',
        'William' => 'geh@gmail.com'
    );

    foreach($contacts as $contact => $email){
        echo $contact . ':' . $email . '<br>';
    }

?>