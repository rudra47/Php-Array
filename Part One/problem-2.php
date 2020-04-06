<!--  -->

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
                    $color = array('white', 'green', 'red'') <br>
                    Write a PHP script which will display the colors in the following way :
                </p>

                <h3>Output:</h3>
                <?php
                   $color = array('white', 'green', 'red');
                   foreach ($color as $c){
                        echo "$c, ";
                   }
                   sort($color);
                   echo "<ul>";
                   foreach ($color as $y)
                   {
                   echo "<li>$y</li>";
                   }
                   echo "</ul>";
                ?>
            </div>
        </div>
    </div>

</body>
</html>