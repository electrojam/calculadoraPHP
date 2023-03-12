<?php 
/*  Tener una lista de ciudades con un clima y una ubicación específica */

function recomendacion() {
  
  $clima = array(
    "Bogota" => "frio",
    "Monteria" => "calido",
    "Medellin" => "templado"
  );

  $ubicacion = array(
    "Guajira" => "Norte",
    "Leticia" => "Sur",
    "Santander" => "Este",
    "Antioquia" => "Oeste"
  );
    
  $turismo = array(
    "Santa Marta" => "mar",
    "Villavicencio" => "llano",
    "Riohacha" => "desierto",
    "Quindio" => "valle"
  );

  switch("turismo") {
    case "clima":
      echo array_search("frio", $clima);
    break;
    case "ubicacion":
      echo array_search("norte", $ubicacion);
    break;
    case "turismo":
      echo array_search("desierto", $turismo);
    break;
  }
}

recomendacion();
?>