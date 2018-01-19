<?php

    # Check for specific posted data existing
    if (filter_has_var(INPUT_POST, 'data')){
        echo 'Data Found<br>';

        # Remove illegal characters from email
        $email = filter_var($_POST['data'], FILTER_SANITIZE_EMAIL);

        # Some Other Available Sanitizers
        /*
         * FILTER_SANITIZE_EMAIL
         * FILTER_SANITIZE_ENCODED
         * FILTER_SANITIZE_NUMBER_FLOAT
         * FILTER_SANITIZE_NUMBER_INT
         * FILTER_SANITIZE_SPECIAL_CHARS
         * FILTER_SANITIZE_STRING
         * FILTER_SANITIZE_URL
         * */



        if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){

            # Some Other Available filters;
            /*
             * FILTER_VALIDATE_BOOLEAN
             * FILTER_VALIDATE_EMAIL
             * FILTER_VALIDATE_FLOAT
             * FILTER_VALIDATE_INT
             * FILTER_VALIDATE_IP
             * FILTER_VALIDATE_REGEXP
             * FILTER_VALIDATE_URL
             * */



            echo "According to " .
                FILTER_VALIDATE_EMAIL .
                " Email " .
                $email .
                " is Valid<br>";
        }
        else {
            echo 'Email is NOT valid<br>';
        }

    }
    else {
        echo 'No Data<br>';
    }


    # When you want to validate an array of inputs, you build a filter object, and use that with the 'filter_input_array' function
    $myFilters = [
        'data' => FILTER_VALIDATE_EMAIL,
        'data2' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => [
                'min_range' => 1,
                'max_range' => 100
            ]
        ]
    ];
    // print_r(filter_input_array(INPUT_POST, $myFilters));



    # Similarly we can do the same for a variable array.
    $myArray = array(
        'name' => 'andrew balogh',
        'age' => '35',
        'email' => 'andrew@gmail.com'
    );

    $theFilters = array(
        'name' => array(
            'filter' => FILTER_CALLBACK,    // Note that this option corresponds to applying the 'ucwords()' function to the string;
            'options' => 'ucwords'
        ),
        'age' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array(
                'min_range' => 1,
                'max_range' => 120
            )
        ),
        'email' => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($myArray, $theFilters));


?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test filters</title>
        <script src=""></script>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>Enter Data</label>
            <input type="text" name="data">
            <input type="text" name="data2">
            <button type="submit">Submit</button>
        </form>
    </body>

</html>