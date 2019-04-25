<?php
namespace SRC;
use SRC\Router;

class ThreeBackend{
  private $options;
  private $router;

  public function __construct($options){
    $this->router = new Router();
    $this->options = $options;
    // echo json_encode($options);
  }

  public function run(){
    return 'Run';
  }
}
