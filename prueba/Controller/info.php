<?php
  require_once('../Model/datos.php');

  if(isset($_POST['id'])){

    $idCiudad = $_POST['id'];
    consultaApp($idCiudad);

  }

  function ciudades(){
    $ciudades = [
      ['Nombre' => 'Miami', 'idCiudad' => '4164138', 'lat'=> '25.76', 'long' => '-80.19'],
      ['Nombre' => 'New York', 'idCiudad' => '5128581', 'lat'=> '40.71', 'long' => '-74.5'],
      ['Nombre' => 'Orlando', 'idCiudad' => '4167147', 'lat'=> '28.54', 'long' => '-81.37'],
    ];

    return $ciudades;
  }



?>
