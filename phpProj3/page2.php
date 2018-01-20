<?php
    # We can update a cookie, by simply again setting it with new values
    if(filter_has_var(INPUT_POST, 'add_cookie')){
        setcookie('username', 'Doctor Zhivargo', time()+7200);  // expire in 1 hour
    }
    # We can delete a particular cookie by setting it with a Past expiry time
    if(filter_has_var(INPUT_POST, 'remove_cookie') && isset($_COOKIE['username'])){
        setcookie('username', $_COOKIE['username'], time()-3600);
    }
    # if page3.php was gone to, a 'userguy' serialized cookie would have been set.
    if(isset($_COOKIE['userguy'])){

        # We need to unserialize cookie data that was serialized
        $userguy = unserialize($_COOKIE['userguy']);
        print_r($userguy);
        echo '<br><br>';
    }





# Check via the cookie array if there are any cookies pertaining to this site at all
    if(count($_COOKIE) > 0){
        echo 'There are ' . count($_COOKIE) . ' cookies saved<br>';
    }
    else {
        echo 'There are no cookies saved';
    }


    # We will check for the cookie via the $_COOKIE global array
    if (isset($_COOKIE['username'])){
        echo 'User ' . $_COOKIE['username'] . ' is setup';
    }
    else {
        echo 'User is not setup';
    }




?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cookie tests page 2</title>
    </head>

    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button type="submit" name="add_cookie">COOKIE</button>
            <button type="submit" name="remove_cookie">REMOVE</button>
        </form>

    </body>

</html>
