<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Citanje datoteke!!!</h1>
    <?php
    $putanja = "datoteke/dat.txt";
        if(file_exists($putanja)){
            $sadrzaj = file_get_contents($putanja);
            $sadrzaj = str_replace("\n", "<br>", $sadrzaj);
            echo $sadrzaj;
        }
        else{
            echo "Ne postoji datoteka!!!";
            exit();
        }
        echo "<hr>";
    ?>
    <hr>
    <?php
        if (file_exists($putanja)){
            $file = fopen($putanja, "r");
            $i=1;
                while(($red=fgets($file))!= NULL){
                    echo $i." :".$red."<br>";
                    $i++;
                }
            fclose($file);
        }
        else{
            echo "Datoteka ne postoji";
            exit();
        }
    ?>
    <hr>
    <?php
        if (file_exists($putanja)){
            $file=fopen($putanja, "r");
            $i=1;
                while(($karakter = fgetc($file))!=NULL){
                    echo $i." :".$karakter."<br>";
                    $i++;
                }
            fclose($file);
        }
        else{
            echo "Ne postoji datoteka!!1";
            exit();
        }
    ?>
    
</body>
</html>