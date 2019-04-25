<?php
  header("Access-Control-Allow-Origin: *");
  header('Content-Type: application/json');

  use SRC\ThreeBackend;
  require '../vendor/autoload.php';

  $core = new ThreeBackend([
    'dev' => true
  ]);

  $core->run();
?>
