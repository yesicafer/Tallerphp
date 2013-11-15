<?php
class A { 
    
    static $x;
    public $y;
    
    
    public function __construct() {
        
         $this->x= array("1,2");
          $this->y= array();
         
    }






    public function f($z)
    {
        
        //echo "----z>".$z[1]."<br>";
        $z[1]=+2;         
        //echo "----z>".$z[1]."<br>";
        
    }

    public function g(){
        $a=new A ();
        $a->x[0]++;
        
    }
    
}
class B {
    
    public function main() 
    {
        //echo "1";
        
        $b=new A();
        $b->y= $b->x;
//        echo  $b->y."<br>";
//        echo  $b->x."<br>";
        $b->f ($b->y);
        //echo "3";
        $b->g();
        //echo "4";
        
        print_r($b->y);
        print_r($b->x);
        
        
        
//        echo $b->x[0]." --- ".$b->x[1]; 
//        echo $b->y[0]." --- ".$b->y[1]; 
      
      //echo "5";
      
      
        
       
        
    }
}
$Yesica=new B();


 echo $Yesica->main();


?>
