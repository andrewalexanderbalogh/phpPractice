<?php
/**
 * Created by PhpStorm.
 * User: andrewvm
 * Date: 16/01/18
 * Time: 12:03 PM
 */

    # Conditionals
    /*
     *  ==      Value equality
     *  ===     Strict equality
     *  <
     *  >
     *  >=
     *  <=
     *  !=
     *  !==
     */

    # Logical Operators
    /*
     * and &&
     * or ||
     * xor
     *
     *
     * */

    $num = 7;

    if($num){
        echo '5 passed';
    }
    else if($num){
        echo '6 passed';
    }
    else {
        echo 'did not pass';
    }

    echo '<br>';



    # Switches

    $favColor = 'f';
    switch($favColor){
        case 'red':
            echo 'fav is red';
            break;
        case 'blue':
            echo 'fav is blue';
            break;
        default:
            echo 'you dont like any';

    }


?>
