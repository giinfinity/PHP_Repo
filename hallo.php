<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>100 Zahlen</title>
</head>
<body>
<?php
//$zahlen = array();
#$Container = array();
#for ($i = 1; $i <= 99; ++$i) {
  #$zahlen[] = $i;
#}
#var_dump($zahlen);
#var_dump($i);
?>
<p>Grid mit 100 Zahlen</p>

<!--Funktion um Primzahlen zu finden-->
<?php
function checkPrim($num)
{
  if($num%2==0){
    return false;
  }
  for($i = 3; $i < $num; $i+=2){
    if($num % $i == 0){
      return false;
    }
  }
  return true;
}
?>

<!--Wurzel Funktion-->
<?php
$quadrat = sqrt(100,5);
$zahlen100 = array();
?>



<?php
echo '<table style="border:1px solid black">';
  $zahlen = array();
  for ($i = 1; $i <= 9; ++$i) {
    $zahlen[] = $i;
    echo 
    "<td style=\"border:1px solid black;\">
     <span style=\"color:blue;\">".$i."</span></td>";
     for ($i = 10; $i <=18; ++$i) {
      $zahlen[] = $i;
      echo 
      "<tr><td style=\"border:1px solid black;\">
       <span style=\"color:blue;\">".$i."</span></tr></td>";
    }
  }
  for ($i = 10; $i <= 18; ++$i) {
    $zahlen[] = $i;
    echo 
    "<tr><td style=\"border:1px solid black;\">
     <span style=\"color:blue;\">".$i."</span></tr>";
     for ($i = 28; $i <= 35; ++$i) {
      $zahlen[] = $i;
      echo 
      "<tr style=\"border:1px solid black;\">
       <span style=\"color:blue;\">".$i."</span></tr>";
    }
  }
  echo '</table>'; ?>
</body>
</html>/*/
