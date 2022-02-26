<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>apend</h1>
    <?php
        $putanja = "datoteke/upis.txt";
        $strZaUpis = "Sara.\nSara.\n";
        $file = fopen($putanja, "a");
            fwrite($file, $strZaUpis);
        fclose($file);
        echo "Uspesan upis"."<br>";
        $sadrzaj = file_get_contents($putanja);
        $sadrzaj = str_replace("\n", "<br>", $sadrzaj);
        echo $sadrzaj."<br>";
    ?>
</body>
</html>