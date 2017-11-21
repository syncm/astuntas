 <?php 
      $zmones = array(
        array('vardas' => 'Jonas', 'lytis' => 'V'),
        array('vardas' => 'Ona', 'lytis' => 'M'),
        array('vardas' => 'Petras', 'lytis' => 'V'),
        array('vardas' => 'Marytė', 'lytis' => 'M'),
        array('vardas' => 'Eglė', 'lytis' => 'M'));

        

     foreach($zmones as $k => $v)
{
if ($v['lytis']=="V"){
    foreach($zmones as $k => $v1){

        if ($v1['lytis']=="M"){

    echo $v['vardas']." ".$v1['vardas'];
    echo "<br>";
        }
    }
}



}

?>