<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AH-Nettmann Formular</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <ul class="ersteListe">
                <li>
                    <a href="#">Zutrittsversuche</a>
                </li>
                <li>
                    <a href="#">Mitarbeiter</a>
                </li>
                <li>
                    <a href="#" style="text-decoration: underline;">Mietwagen</a>
                </li>
                <li>
                <button name="backBtn" type="button" onclick="history.back();">Zurück</button>
                </li>
            </ul>
            <img class="Logo" src="Logo Nettmann.png" alt="AH-Nettmann Logo"></img>
        </nav>
    </header>
    <h1>Mietwagen - Kundenbeleg</h1>

    <?php
if ($_POST["txtKundennummer"] == '') {
    echo 'Hallo, geh bitte zurück und trag deinen Namen ein!';

    }
else {
    echo 'Kundennummer ' . $_POST["txtKundennummer"] . ',';
}?><br>

    <strong>Autoauswahl:</strong>
    <?php
if (isset($_POST["cb1"]))
    echo "Kleinwagen<br/>";
if (isset($_POST["cb2"]))
    echo "Kompaktwagen<br/>";
if (isset($_POST["cb3"]))
    echo "Familienwagen<br/>";
if (isset($_POST["cb4"]))
    echo "Luxuswagen<br/>"; ?><br>

    <strong>Autozubehör:</strong>
    <?php
if (isset($_POST["cb5"]))
    echo "Klimaanlage<br/>";
if (isset($_POST["cb6"]))
    echo "Heizung<br/>";
if (isset($_POST["cb7"]))
    echo "Navigator<br/>"; ?><br>

    <?php
if ($_POST['Senden']) {
    $zzz = $_POST['location'];
    echo '<strong>Abholort:</strong> ' . $zzz;
}
?>
    <hr>
    <section class="column">
        <ul>
            <li style="list-style: none; margin-bottom: 20px;"><strong>Kontakt:</strong></li>
            <li>Ottostraße 22, 90762 Fürth</li>
            <li>0911 11</li>
            <li>info@autohaus-nettmann.de</li>
        </ul>
        <ul>
            <li style="list-style: none; margin-bottom: 20px;"><strong>Bankdaten:</strong></li>
            <li>IBAN: DE666 </li>
            <li>BIC 123</li>
            <li>Institut: SuperBank</li>
        </ul>
    </section>
</body>
</html>