<!DOCTYPE html>
<html lang="en">
<head>
    <title>Php array problem solving</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 py-10">
                <h1>Problem 1</h1>
            </div>
            <div class="col-md-8 offset-md-2">
                <h3>Problem is: </h3>
                <p> 
                    Write a PHP script which decodes the following JSON string. <br>

                    Sample JSON code :
                    {"Title": "The Cuckoos Calling",
                    "Author": "Robert Galbraith",
                    "Detail": {
                    "Publisher": "Little Brown"
                    }}
                </p>

                <h3>Output:</h3>
                <p>
                    <?php
                        function geteValue($value,$key){
                            echo "$key : $value".'<br>';
                        }
                        $a = '{
                            "Title": "The Cuckoos Calling",
                            "Author": "Robert Galbraith",
                            "Detail":{ 
                                "Publisher": "Little Brown"
                            }
                        }';
                        $j1 = json_decode($a, true);
                        array_walk_recursive($j1,"geteValue");
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>
</html>