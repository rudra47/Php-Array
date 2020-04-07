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
                    Write a PHP script to sort the following associative array : <br>

                    array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in <br>
                    a) ascending order sort by value<br>
                    b) ascending order sort by Key<br>
                    c) descending order sorting by Value<br>
                    d) descending order sorting by Key<br>
                </p>

                <h3>Output:</h3>
                <p>
                    <?php
                        echo "Associative array : Ascending order sort by value";
                        $array2=array(
                            "Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"
                        ); 
                        asort($array2);
                        foreach($array2 as $y=>$y_value){
                            echo "<br>"."Age of ".$y." is : ".$y_value;
                        }

                        echo "<br>"."Associative array : Ascending order sort by Key";
                        $array3=array(
                            "Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"
                        );
                        ksort($array3);
                        foreach($array3 as $y=>$y_value){
                            echo "<br>"."Age of ".$y." is : ".$y_value."";
                        }

                        echo "<br>"."Associative array : Descending order sorting by Value";
                        $age=array(
                            "Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"
                        );
                        arsort($age);
                        foreach($age as $y=>$y_value){
                            echo "<br>"."Age of ".$y." is : ".$y_value."";
                        }

                        echo "<br>"."Associative array : Descending order sorting by Key";
                        $array4=array(
                            "Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"
                        ); 
                        krsort($array4);
                        foreach($array4 as $y=>$y_value){
                            echo "<br>"."Age of ".$y." is : ".$y_value."";
                        } 
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>
</html>