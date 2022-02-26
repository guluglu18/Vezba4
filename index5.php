<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dodavanje</h1>
    <form action="index5.php" method="POST">
        <input id="tekst" name="tekst" type="text" placeholder="Unesite podatak"/><br><br>
        <input name="datum" type="date"><br><br>
        <select name="kategorija" id="kategorija">
            <option value="0">Izaberite opciju</option>
            <option value="1">Opcija 1</option>
            <option value="2">Opcija 2</option>
            <option value="3">Opcija 3</option>
        </select><br><br>
        <input type="submit" value="Klikni me!">
    </form>

    <?php
        if(isset($_POST['tekst']) && isset($_POST['datum']) && isset($_POST['kategorija'])){
            $tekst = $_POST['tekst'];
            $datum = $_POST['datum'];
            $kat = $_POST['kategorija'];
            echo "<p>Podaci koje ste uneli su:<br>Tekst: $tekst<br>Datum: $datum<br>Kategorija: $kat<br></p>";
        }
        else{
            echo "Nisu poslati podaci!<br>";
        }
        
    ?>
</body>
</html>