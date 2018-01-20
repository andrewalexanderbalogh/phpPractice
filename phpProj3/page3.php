<?php

    # What if we want to set a cookie that has multiple fields set?
    /*
     * We need to make an array of those values, then serialize the data.
     * */
    $userguy = [
        'name' => 'Anderson',
        'email' => 'test@test.net',
        'age' => 36
    ];

    # Serializing will leave the values as a composite, not so user freindly value.
    $userguy = serialize($userguy);
    setcookie('userguy', $userguy, time()+3600);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1 style="background-color: #6a3484; color: #3fb618">Hey Serial Guy!</h1>
    </body>
</html>
