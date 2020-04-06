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
                    $color = array(4 => 'white', 6 => 'green', 11=> 'red'); <br>
                    Write a PHP script to get the first element of the above array.
                </p>

                <h3>Output:</h3>
                <p>
                    <?php
                        $color = array(4 => 'white', 6 => 'green', 11=> 'red');
                        echo reset($color);
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>
</html>