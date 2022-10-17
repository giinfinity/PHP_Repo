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

<!--entspricht name in Form / HTML-->
<?php
#$_POST["txtNachname"];
#$_POST["chkRueckruf"];

#if($_POST["Senden"]){
    #if(trim($_POST["txtNachname"]) == ""){
        #echo "Name ist ein Pflichfeld";
        #echo "<a href=\Kontakt_Ergebnis.php\">zurück</a>";}
    #else{

    #}
#}
?>

<header>
            <nav class="navbar navbar-expand-lg bg-dark">
                <ul class="ersteListe">
                    <li>
                        <a href="#" >Zutrittsversuche</a>
                      </li>
                      <li>
                        <a href="#" >Mitarbeiter</a>
                      </li>
                      <li>
                        <a href="#" style="text-decoration: underline;" >Mietwagen</a>
                      </li>   
                </ul>
                <img class="Logo" src="Logo Nettmann.png" alt="AH-Nettmann Logo"></img>
            </nav>
</header>

<h1>Mietwagen</h1><br>

<!--Formular für Kontakt-->
<form method="post" action="Kontakt_Ergebnis.php">

<div class="Input">
    <label for="txtKundennummer">Kundennummer</label>
    <input type="text" name="txtKundennummer" id="txtKundennummer">
</div>

<!--HTML Version-->
<p>Welche Fahrzeugklasse bevorzugen Sie?</p>
<input type="checkbox" name="cb1" value="Kleinwagen">Kleinwagen<br>
<input type="checkbox" name="cb2" value="Kompaktwagen">Kompaktwagen<br>
<input type="checkbox" name="cb3" value="Familienwagen">Familiennwagen<br>
<input type="checkbox" name="cb4" value="Luxuswagen">Luxuswagen<br>

<p>Welche Zusatzausstattung wünschen Sie?</p>
<!--PHP Version-->
<input type="checkbox" name="cb5"
<?php if (isset($cb) && $cb=="Klimaanlage") echo "checked";?>
value="Klimaanlage">Klimaanlage<br>
<input type="checkbox" name="cb6"
<?php if (isset($cb) && $cb=="Naviagtor") echo "checked";?>
value="Navigator">Naviagtor<br>
<input type="checkbox" name="cb7"
<?php if (isset($cb) && $cb=="Standheizung") echo "checked";?>
value="Standheizung">Standheizung<br>
<br>

<label>Wo wollen Sie das Auto abholen:</label><br>
<select name="location" id="location">
 <option name="combo4" value="Ah-Nettmann">AH-Nettmann</option>
  <option name="combo1" value="Tankstelle">Tankstelle</option>
  <option name="combo2" value="S-Bahnstation">S-Bahnstation</option>
  <option name="combo3"value="Hauptbahnhof">Hauptbahnhof</option><br>
</select><br>
    <input type="reset" value="Löschen"/>
    <input type="submit" name="Senden" value="Absenden"/><br>
</form>
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