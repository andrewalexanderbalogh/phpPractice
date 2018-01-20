
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form Testing</title>


        <style type="text/css">
            h1#name {
                color: rgba(255,255,0,1);
                background-color: rgba(255,0,0,1);
                font-family: Purisa, Arial, sans-serif;
            }
            h1#email {
                color: rgba(0,0,255,1);
                background-color: rgba(255,0,0,1);
                font-family: Purisa, Arial, sans-serif;
                text-decoration: underline;
            }
            h1#query_string {
                color: rgba(0,0,255,1);
                background-color: rgba(0,0,0,1);
                font-family: Purisa, Arial, sans-serif;
            }
            button#alert_button {
                color: rgba(181, 29, 200, 0.7);
            }
        </style>


        <script type="text/javascript">
            let alertClick = () => alert('You\'ve got mail');

            /**
             * Used to initiate a Post XMLHttpRequest with default form data,
             * then replace the current page contents with the response
             * @function postDefaults
             *
             */
            let postDefaults = () => {
                let formData = new FormData();
                formData.append('name', 'Brian');
                formData.append('email', 'villain@bon.com');
                // let formData = { name : 'Brian', email : 'villain@bon.com' };

                let makeRequest = new XMLHttpRequest();
                makeRequest.onload = function(){
                    let _this = this;
                    document.querySelector('html').innerHTML = _this.responseText;
                    console.log('CONTINUING ON...')
                };

                makeRequest.open('POST', `http://${window.location.host}/test_php/form.php`);

                // makeRequest.setRequestHeader('Accept', 'application/json');
                // makeRequest.setRequestHeader('Content-Type', 'application/json');
                makeRequest.send(formData);
            };

            /**
             * Used to initiate a Get XMLHttpRequest with url-query-data,
             * then replace the current page contents with the response
             * @function getDefaults
             */
            let getDefaults = () => {
                let formData = '?name=Brian&email=villain%40bon.com';

                let makeRequest = new XMLHttpRequest();
                makeRequest.onload = function(){
                    let _this = this;
                    document.querySelector('html').innerHTML = _this.responseText;
                    console.log('CONTINUING ON...')
                };

                makeRequest.open('GET', `http://${window.location.host}/test_php/form.php${formData}`);
                makeRequest.send();
            }

        </script>
    </head>

    <body>

        <h1 id="query_string">Query String</h1>
        <p>
            <?php
                // $_SERVER['QUERY_STRING'] will have the string represented by a query-url
                if (isset($_SERVER['QUERY_STRING'])){
                    echo $_SERVER['QUERY_STRING'];
                }
                else {
                    echo 'No query string';
                }

            ?>
        </p>

        <?php
            // There is also the $_REQUEST super-global, that will have the values from POST or GET
              if(isset($_GET['name']) || isset($_POST['name'])):
        ?>
            <h1 id="name">
                <?php
                    // This function escapes chars before adding to html so, can prevent aspects of XSS attacks
                    $clean_content = isset($_GET['name']) ?  htmlentities($_GET['name']) : htmlentities($_POST['name']);
                    echo $clean_content;
                ?>
            </h1>
        <?php endif; ?>

        <?php
              if(isset($_GET['email']) || isset($_POST['email'])):
        ?>
            <h1 id="email">
                <?php
                    $email_content = isset($_GET['email']) ? $_GET['email'] : $_POST['email'];
                    echo $email_content;
                ?>
            </h1>
        <?php endif; ?>


        <!--GET does request in URL, POST goes tO headers sent-->
        <form method="POST" action="form.php">
            <div>
                <label>Name</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email">
            </div>
            <input type="submit" value="Submit Form">
        </form>
        <button id="alert_button" onclick="alertClick()">ALERT</button>
        <button id="js_post" onclick="postDefaults()">POST DEFAULTS</button>
    </body>
</html>