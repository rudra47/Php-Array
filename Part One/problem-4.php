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
                $x = array(1, 2, 3, 4, 5); <br>
                Delete an element from the above array. After deleting the element, integer keys must be normalized.
                </p>

                <h3>Output:</h3>
                <p>
                    <?php
                        $x = array(1, 2, 3, 4, 5);
                        echo "Original data: ";
                        
                        echo '<pre>';
                        print_r($x);
                        echo '</pre>';

                        unset($x[3]);
                        
                        $x = array_values($x);
                        echo '<br>';
                        echo "After Delete: ";

                        echo '<pre>';
                        print_r($x);
                        echo '</pre>';
                    ?>
                
                </p>
            </div>
        </div>
    </div>

</body>
</html>