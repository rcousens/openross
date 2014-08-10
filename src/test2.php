<?php

namespace Test;

class Testing {
  public function __construct($a, $b) 
  {
    doSomething($a);
  }
  
  public function doSomething($a)
  {
    return $a + hello;
  }
  
  public function doNothing($b)
  {
  
  }
  
  public function test()
  {
    echo->"this is illegal\n";
  }

}

class DoubleTesting 
{
  public function test()
  {
    echo->"this is illegal\n";
    $this->doSomething();
  }
  
    public function doSomething($a)
  {
    return $a + hello;
  }
  
  public function doNothing($b)
  {
  
  }
}
