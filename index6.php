<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kupovina</h1>
    <form action="index6.php" method="POST">
        <select name="kategorija" id="kategorija">
            <option value="0">Izaberite kategoriju</option>
            <?php
                $file = fopen("datoteke/kategorije.txt", "r");
                    while(($red=trim(fgets($file)))!=NULL)
                        echo "<option value='$red'>$red</option>";
                fclose($file);
            ?>
           
        </select><br><br>
        <input type="text" name="model" placeholder="Unesite model"/><br><br>
        <input type="number" name="cena" id="cena" value="1000" step="100"/><br><br>
        <button type="submit">Klikni me</button>
    </form>
    <hr>
    <?php
        if(isset($_POST['kategorija'])){
            $kat = $_POST ['kategorija'];
            if($kat!="0"){
                $model = $_POST['model'];
                $cena = $_POST['cena'];
                $stringZaUpis = "$model#$kat#$cena\n";
                $file=fopen("datoteke/proizvodi.txt", "a");
                fwrite($file, $stringZaUpis);
                fclose($file);
            }
            else{
                echo "<br><br>Niste izabrali kategoriju!!<br><br>";
            }
        }
        else{
            echo "<br><br>Dobro dosli na stranicu za kupovinu!!<br>";
        }
    ?>
    <h2>Kupljeni proizvodi</h2>
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