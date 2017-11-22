 <?php 
      $zmones = array(
        array('vardas' => 'Jonas', 'lytis' => 'V'),
        array('vardas' => 'Ona', 'lytis' => 'M'),
        array('vardas' => 'Petras', 'lytis' => 'V'),
        array('vardas' => 'Marytė', 'lytis' => 'M'),
        array('vardas' => 'Eglė', 'lytis' => 'M'));


echo "<b>Galimi poru variantai: </b><br>";
if ($zmones) {

for ($i =0; $i<count($zmones); $i++)
{
for ($j = $i + 1; $j<count($zmones) ; $j++)
{
    for ($k = $j+1; $k<count($zmones); $k++)
{
if ($zmones[$i]['lytis'] != $zmones[$j]['lytis'] ||
$zmones[$j]['lytis'] != $zmones[$k]['lytis']){

echo $zmones[$i]['vardas']."($i)-".$zmones[$j]['vardas']."($j)-".$zmones[$k]['vardas']."($k)<br>";

      }
    }
}
      }
      }
      else 
      {
          echo "Nera duomenu";
      }

?>

