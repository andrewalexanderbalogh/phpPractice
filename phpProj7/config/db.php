<?php

    /*
     * Not sure why no complaints about DB_HOST, DB_USER, etc.. from config.php
     * as the file does not seem to need being included..
     * require('config.php');
     * Jan 23/18: Dont need the require, since config.php along with this file are
     *  require/included with index.php
     * */
    require('config.php');

    # Create Connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    # Check connection
    if (mysqli_connect_errno()){
        // Connection Failed
        echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
    }
?>