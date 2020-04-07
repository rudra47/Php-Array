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
                <h1>Array Problem</h1>
            </div>
            <div class="col-md-8 offset-md-2">
                <h3>Problem is: </h3>
                <p> 
                    Write a PHP script that inserts a new item in an array in any position.
                </p>

                <h3>Output:</h3>
                <p>
                    <?php
                        $original = array( '1','2','3','4','5' );
                        echo 'Original array : '."<br>";

                        foreach ($original as $x){
                            echo "$x ";
                        }

                        $inserted = '$';
                        array_splice( $original, 3, 0, $inserted ); 
                        echo "<br>After inserting '$' the array is : "."<br>";

                        foreach ($original as $x){
                            echo "$x ";
                        }
                        echo "<br>"
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>
</html>