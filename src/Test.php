<?php
namespace Lic\Test;

class Test {
  private $test = null;

  public function __construct($test='Test'){
    $this->test = $test;
  }

  public function say(){
    return $this->test;
  }
}
