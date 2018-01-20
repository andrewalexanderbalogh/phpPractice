<?php
    // Array of people values - @TODO - Get these from DB instead
    $people = [
        'Steve',
        'John',
        'Kathy',
        'Mike',
        'Evan',
        'Anthony',
        'Tom',
        'Rhonda',
        'Hal',
        'Farrah',
        'Linda',
        'Shawn',
        'Olivia',
        'Derek',
        'Amanda',
        'Rachel',
        'Katie',
        'Jillian',
        'Jose',
        'Malcom',
        'Greg',
        'Mary',
        'Brad'
    ];
    $people[] = 'Michaela';
    $people[] = 'Toby';


    // Get Query String
    $suggestion = '';
    $q = $_REQUEST['q'];

    if (!empty($q)){
        $q = strtolower($q);
        $len = strlen($q);

        foreach ($people as $person){
            $partial_name = substr($person, 0, $len);
            // Case-insensitive function to find string within string
            if (stristr($q, $partial_name)){
                $suggestion .= empty($suggestion) ? $person : ", $person";
            }
        }
    }

    # Here is basically all the response text that will be returned
    echo !empty($suggestion) ? $suggestion : 'No Suggestions';

?>