<?php
    $path = '/dir1/deep1/deep2/myfile.php';
    $path1_real = 'resources/file1.txt';
    $path2_real = '/basicHtml/ch2/ch2a_page.html';  // This is not consider a dir path
    $path3_real = '../phpProj4/php/suggest.php';
    $path4_real = '/usr/local/bin';
    $path5_real = 'resources/file2.txt';

    # Return base filename + ext
    echo basename($path) . '<br>';

    # Return base filename sans ext
    echo basename($path, '.php') . '<br>';

    # Return path directory structure
    echo dirname($path) . '<br><br><br>';

    # Return whether files/folders actually exist
    echo file_exists($path) ? basename($path) . ' Exists<br>' : basename($path) . ' Dont Exist<br>';
    echo file_exists($path1_real) ? basename($path1_real) . ' Exists<br>' : basename($path1_real) . ' Dont Exist<br>';
    echo file_exists($path2_real) ? basename($path2_real) . ' Exists<br>' : basename($path2_real) . ' Dont Exist<br>';
    echo file_exists($path3_real) ? basename($path3_real) . ' Exists<br>' : basename($path3_real) . ' Dont Exist<br>';
    echo file_exists($path4_real) ? basename($path4_real) . ' Exists<br>' : basename($path4_real) . ' Dont Exist<br>';


    echo '<br><br>';
    # Get the full path to file
    echo basename($path3_real) . ' Full Path: ' . realpath($path3_real) . '<br>';
    # Check if is file or not
    echo is_file($path3_real) ? basename($path3_real) . ' is file<br>' : basename($path3_real) . ' is not file<br>';
    echo is_file($path4_real) ? basename($path4_real) . ' is file<br>' : basename($path4_real) . ' is not file<br>';
    # Check if file is readable/writable
    echo is_writable($path3_real) ? basename($path3_real) . ' is writable<br>' : basename($path3_real) . ' is  not writable<br>';
    echo is_readable($path3_real) ? basename($path3_real) . ' is readable<br>' : basename($path3_real) . ' is  not readable<br>';
    echo is_writable($path5_real) ? basename($path5_real) . ' is writable<br>' : basename($path5_real) . ' is  not writable<br>';


    echo '<br><br>';
    # Get file size
    echo basename($path3_real) . ' is ' . filesize($path3_real) . ' kB<br>';



    # Make a directory
    // mkdir('testingTime');

    # Delete non-empty directory
    // rmdir('testingTime');

    # Copy file
    //copy('resources/file1.txt', 'resources/file1_copy.txt');

    # Rename file
    //rename('resources/file1_copy.txt', 'resources/ypoc_1elif.txt');

    # Delete File
    //unlink('resources/ypoc_1elif.txt');

    # Write from file to String
    echo basename('resources/file1.txt') . ' CONTENTS:<br>' . file_get_contents('resources/file1.txt') . '<br>';

    # Write string to file (overwrite by default)
    $fileContents = file_get_contents('resources/file1.txt');
    #file_put_contents('resources/file1.txt', $fileContents . ' Goodbye World');


    # Open File for Read/Write by Byte
//    $openFile = fopen($path1_real, 'r');
//    $readData = fread($openFile, filesize($path1_real));
//    echo $readData . '<br>'
//    fclose($openFile);

//    $openFile = fopen($path1_real, 'w');
//    $writeData = 'Olympus Camaras';
//    fwrite($openFile, $writeData);
//    fclose($openFile);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>File Path Testing</title>
        <link rel="stylesheet" href="">
        <script src=""></script>
    </head>


    <body>
        <main>
            <header></header>
            <section>
            </section>

            <footer></footer>
        </main>

    </body>
</html>
