<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Search User</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/javascript">
            /**
             * On entry to the text input, provide suggestions to the search output
             * @param suggester
             */
            function showSuggestion(suggester) {
                if (!suggester.value.length){
                    document.querySelector('#output').innerHTML = '';
                }
                else {
                    // document.querySelector('#output').innerHTML = suggester.value;

                    // Make an AJAX request to see if value exists
                    const xmlhttp = new XMLHttpRequest();

                    xmlhttp.onload = function() {
                        if (this.readyState === 4 && this.status === 200){
                            document.querySelector('#output').innerHTML = this.responseText;
                        }
                    };

                    xmlhttp.onerror = function () {
                        document.querySelector('#output').innerHTML = 'Error encountered in fetching results';
                    };

                    xmlhttp.open('GET', `php/suggest.php?q=${suggester.value}`, true);
                    xmlhttp.send();

                }
            }

        </script>

    </head>

    <body>
        <nav></nav>
        <main>
            <header>
                <h1>Practice Search Page</h1>
            </header>

            <section>
                <div class="container">
                    <h1>Search Users</h1>
                    <form>
                        Search User: <input onkeyup="showSuggestion(this)" type="text" class="form-control">
                    </form>
                    <p>Suggestions:
                        <span id="output" style="font-weight: bold"></span>
                    </p>
                </div>
            </section>

            <footer>
                <address>
                    <a href="mailto:boromirofgondar@gmail.com"></a>
                </address>
                <p>Copyright &copy
                    <?php echo date('Y/m/d'); ?>
                </p>
            </footer>
        </main>
    </body>

</html>