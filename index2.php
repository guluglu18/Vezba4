<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Proizvodi</h1>
    <?php
        $putanja = "datoteke/proizvodi.txt";
        if (file_exists($putanja)){
            $file = fopen($putanja, "r");
            $i=1;
                while(($red=fgets($file))!= NULL){
                    #echo $i." :".$red."<br>";
                    echo "<div style='border: 1px solid black; margin: 5px'>";
                    $tmpNiz = explode("#", $red);
                    for($j=0; $j<count($tmpNiz); $j++)
                        echo $tmpNiz[$j]."<br>";
                    $i++;   
                    echo "</div>";
                }
            fclose($file);
        }
        else{
            echo "Datoteka ne postoji";
            exit();
        }
    ?>
</body>
</html>