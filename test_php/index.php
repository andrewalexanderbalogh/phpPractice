<?php
    /**
     * Created by PhpStorm.
     * User: andrewvm
     * Date: 15/01/18
     * Time: 10:18 PM
     */
    $carts = [
        'mario' => ['ape' => 'monkey', 'dog' => 'husky' ],
        'luigi' => ['pop' => 'coke', 'eat' => 'food']
    ];

    echo $carts['mario']['ape'] . "<br>";
    echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
?>


<?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
        <h3>strpos() must have returned non-false</h3>
        <p>You are using Internet Explorer</p>

<?php
    } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE){
?>
        <h3>strpos() must have returned non-false for FF</h3>
        <p>You are not using Internet Explorer, but are using Firefox</p>
<?php
    } else {
?>
        <h3>strpos() must have returned false</h3>
        <p>You are not using Internet Explorer</p>
<?php
    }
    echo '<br>' . phpinfo();
?>

