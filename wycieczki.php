<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Wycieczki i urlopy</title>
        <link rel="stylesheet" href="styl3.css" />
    </head>
    <body>
        <header>
            <h1>BIURO PODRÓŻY</h1>
        </header>
        <div id="lewy">
            <h2>Kontakt</h2>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </div>
        <div id="srodek">
            <h2>GALERIA</h2>
            <?php skra1(); ?>
        </div>
        <div id="prawy">
            <h2>PROMOCJE</h2>
            <table>
                <tr>
                    <td>Jesień</td>
                    <td>Grupa 4+</td>
                    <td>Grupa 10+</td>
                </tr>
                <tr>
                    <td>5%</td>
                    <td>10%</td>
                    <td>15%</td>
                </tr>
            </table>
        </div>
        <div id="dane">
            <h2>LISTA WYCIECZEK</h2>
            <?php skra2(); ?>
        </div>
        <footer><p>Strone wykonał: 00000000000</p></footer>
    </body>
</html>

<?php
    $pdo = new PDO("mysql:host=localhost;dbname=egzamin3", "root", "");

    function skra1(){
        $pdo = new PDO("mysql:host=localhost;dbname=egzamin3", "root", "");
        $query = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis;";
        $stmt = $pdo->query($query);
        while($row = $stmt->fetch()){
            echo "<img src='img/{$row['nazwaPliku']}' alt='img/{$row['podpis']}'/>";
        }
    }
    
    function skra2(){
        $pdo = new PDO("mysql:host=localhost;dbname=egzamin3", "root", "");
        $query = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1;";
        $stmt = $pdo->query($query);
        while($row = $stmt->fetch()){
            echo "<div> {$row['id']} {$row['dataWyjazdu']} {$row['cel']} {$row['cena']} </div>";
        }
    }

    $pdo = null;


