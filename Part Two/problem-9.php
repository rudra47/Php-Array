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
                    Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. <br>

                    Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
                </p>

                <h3>Output:</h3>
                <p>
                    <?php
                        $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

                        $temp_array = explode(',', $month_temp);
                        $tot_temp = 0;
                        $temp_array_length = count($temp_array);
                        
                        foreach($temp_array as $temp){
                            $tot_temp += $temp;
                        }
                        $avg_temp = $tot_temp/$temp_array_length;
                        echo "Average Temperature is : ".$avg_temp; 

                        sort($temp_array);
                        echo "<br> List of five lowest temperatures : ";
                        for ($i=0; $i< 5; $i++){ 
                            echo $temp_array[$i].", ";
                        }

                        echo "<br> List of five highest temperatures :";
                        for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++){
                            echo $temp_array[$i].", ";
                        } 
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>
</html>