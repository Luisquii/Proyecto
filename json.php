<?php

function loadJson($file) {
  if(file_exists($file)) {
      $jsonString = file_get_contents($file);
      return json_decode($jsonString, true);
  }
  return false;
}

function saveJson($data, $path) {
    return file_put_contents($path, $data);
}
