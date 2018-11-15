<?php

require_once "./json.php";
require_once "./control_formulario.php";
$userlistPath = "./userlist.json";

function saveProduct($userData){

    global $userlistPath;

    //Cargar el archivo a memoria
    $data = loadJson($userlistPath);
    //Hacer append del producto

    //CREO QUE AQUI VA LA VALIDACION DEL GAME TAG PERO AUN NO ESTA BIEN
    foreach ($data as $gTag){
      if($userData["gamertag"] === $gTag["gamertag"]){
        return false;
      }
    }
    $data[] = $userData;
    //Guardar la estructura
    $jsonString = json_encode($data,JSON_PRETTY_PRINT);
    return saveJson($jsonString, $userlistPath);
}



function getProducts(){
    global $userlistPath;
    //cargar JSON
    $data = loadJson($userlistPath);
    //Devolver la info
    return $data;

}


function loginStatus($userData){
  global $userlistPath;
  $data = loadJson($userlistPath);
  //$data = json_encode($data);
  $login = false;

  /*Debugear
  echo json_encode($userData, JSON_PRETTY_PRINT);
  echo json_encode($data[1]["password"], JSON_PRETTY_PRINT);*/

  foreach($data as $gTLogin) {
    //echo json_encode($gTLogin["password"], JSON_PRETTY_PRINT);
    if(($gTLogin["gamertag"] == $userData["gamertag"]) && ($gTLogin["password"] == $userData["password"])){
      echo "entraste";
      $login = true;
      $_SESSION["userSpecs"] = $gTLogin;
    }
  }
  return $login;
}

?>
