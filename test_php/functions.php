<?php
/**
 * Created by PhpStorm.
 * User: andrewvm
 * Date: 16/01/18
 * Time: 11:37 AM
 */

    # Functions - Block of code that can be repeatedly called

    function simpleFunction(){
        echo 'Hello World <br>';
    }
    simpleFunction();


    function sayHello($name = 'Donald Trump'){
        echo "Hello $name<br>";
    }
    sayHello('Joe');
    sayHello();


    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

//    echo 'numbers ' . addNumbers(2,3);


    # Passing values by reference
    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num +=10;
    }

    function mod3($num){
        return $num % 3;
    }

    $myNewNum = 8;
    addFive($myNewNum);
    addTen($myNewNum);

    echo $myNewNum;
    echo mod3(5) . ' ' . $myNewNum;
?>

<br>
<br>
<p style="color=blue; background-color: aquamarine"> And Now a bit more...</p>
<?php
    # Common String Functions

    $myString = '              buddy Hello There my buddy           ';
    # Trim of leading/tailing whitespace
    $myString = trim($myString);
//    $myString = strtoupper($myString);
//    $myString = strtolower($myString);
//    $myString = ucwords($myString);
//    $myString = str_replace('buddy', 'freindo', $myString);
//    $myString = preg_replace('/budd/', 'King', $myString);

    # Chops string from start/end to given numbers chars from there
//    $str_output = substr($myString, -3);
    # String Length
//    $str_output = strlen($myString);
    # Pos of char
//    $str_output = strpos($myString, 'T');
    # Pos of substring
//    $str_output = strrpos($myString, 'ere');

//    $my_array = [true, false, null, 'abc', 33, 44,'def'];
//    foreach ($my_array as $item) {
//        if(is_string($item)){
//            echo "{$item} is a string<br>";
//        }
//    }

//    echo $str_output;
//    var_dump($myString);

    # Compress a string
    $longString =
    "If search and replace are arrays,
     then str_replace() takes a value from each array and
     uses them to search and replace on subject. 
     If replace has fewer values than search,
     then an empty string is used for the rest of replacement values. If
     search is an array and replace is a string, then this replacement
     string is used for every value of search. The converse would not make sense, though. ";

    $compo = gzcompress($longString);
    echo gzuncompress($compo);
?>
