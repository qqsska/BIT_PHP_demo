<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $people = array( 
        "Tomas" => array ("svoris" => 95,"ugis" => 190),
        "Domas" => array ("svoris" => 85,"ugis" => 190),
        "Romas" => array ("svoris" => 120,"ugis" => 188),
        "Liolia" => array ("svoris" => 90,"ugis" => 166),
        "Siga" => array ("svoris" => 80,"ugis" => 188),
        "ponia Braskiene" => array ("svoris" => 150,"ugis" => 150),
        "Saulute" => array("svoris" => 60,"ugis" => 172),
        "Indre" => array ("svoris" => 65, "ugis" => 179)
        );

        print($people[1] . "<br>");
        print_r($people); 
        print_r(array_keys($people));

        echo $people [1]["svoris"] . "<br>";
        
        
       
 ?>
    
</body>
</html>