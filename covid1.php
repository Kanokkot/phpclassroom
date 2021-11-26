<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);
  echo $data[0]->new_case;
  foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }
?>
