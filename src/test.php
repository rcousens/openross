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
    for (i = 0; i < 10; i++) {
      echo "$i";
    }
    echo "i just looped 10 times";
    $tempArray = [];
    
    $tempArray['test'] = 'allocated';
    
    $otherArray = array_keys($tempArray);
    
    echo $otherArray[0];
    
    $0therArray[0] = $tempArray['test'];
    
    echo $otherArray[0];
    
    $i = 0;
    
    echo $i + 1;
  }
  
  public function $test()
  {
    echo->"this is illegal\n";
  }

}

class DoubleTesting 
{
  public function $test()
  {
    echo->"this is illegal\n";
  }
  
}
