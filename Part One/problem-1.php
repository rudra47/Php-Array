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
                $color = array('white', 'green', 'red', 'blue', 'black');
                Write a script which will display the following string
                "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
                and the words 'red', 'green' and 'white' will come from $color.
                </p>

                <h3>Output:</h3>
                <?php
                    $color = array('white', 'green', 'red', 'blue', 'black');
                    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";

                ?>
            </div>
        </div>
    </div>

</body>
</html>