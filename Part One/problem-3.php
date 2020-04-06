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
                    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
                    <br>
                    <br>
                    Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the name of the capital.
                </p>

                <h3>Output:</h3>
                <p>
                    <?php
                    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
                    "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
                    "Finland"=>"Helsinki", "France" => "Paris",
                    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
                    "Germany" => "Berlin", "Greece" => "Athens",
                    "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
                    "Portugal"=>"Lisbon", "Spain"=>"Madrid",
                    "Sweden"=>"Stockholm", "United Kingdom"=>"London",
                    "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
                    "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
                    "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
                    "Austria" => "Vienna", "Poland"=>"Warsaw") ;

                    asort($ceu) ;

                    foreach($ceu as $country => $capital){
                        echo "The capital of $country is $capital"."</br>" ;
                    }
                    ?>
                
                </p>
            </div>
        </div>
    </div>

</body>
</html>