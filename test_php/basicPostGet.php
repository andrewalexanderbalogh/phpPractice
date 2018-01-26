<?php

    // There is also the $_REQUEST super-global, that will have the values from POST or GET
    if(isset($_GET['name'])){
        echo "Got GETTER, name: " . $_REQUEST['name'];
    }
    else if (isset($_POST['name'])){
        echo "Got POSTER, name: " . $_REQUEST['name'];
    }
    else{
        echo "Did'nt get nuthin";
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript">
            /**
             * Used to initiate a Post XMLHttpRequest with default form data,
             * then replace the current page contents with the response
             * @function postDefaults
             *
             */
            let postDefaults = () => {
                let formData = new FormData();
                formData.append('name', 'Brian');
                // formData.append('email', 'villain@bon.com');
                // let formData = { name : 'Brian', email : 'villain@bon.com' };

                let makeRequest = new XMLHttpRequest();
                makeRequest.onload = function(){
                    let _this = this;
                    document.querySelector('html').innerHTML = _this.responseText;
                    console.log('CONTINUING ON...')
                };

                makeRequest.open('POST', `http://${window.location.host}/test_php/basicPostGet.php`);

                // makeRequest.setRequestHeader('Accept', 'application/json');
                // makeRequest.setRequestHeader('Content-Type', 'application/json');
                makeRequest.send(formData);
            };
        </script>
    </head>
    <body>
        <button id="js_post" onclick="postDefaults()">POST DEFAULTS</button>
    </body>
</html>
