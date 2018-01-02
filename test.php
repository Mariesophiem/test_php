<?php  
class taclass {
    
    public $attribut1;
    public static $attribut2;
    
    public function __construct($trucDuContruct) {
        $this->attribut1 = $trucDuContruct;
    }
    
    public function tamethode($parametre1){
        $this->attribut1 = $parametre1;
    }
    public static function tamethode2($parametre1, $parametre2, $parametre3 = false){
        $option = $parametre1;
        self::$attribut2 = $option;
    }
}
$taSuperClass = new taclass('vert');
var_dump($taSuperClass); //exit;
var_dump($taSuperClass->attribut1);
// $taSuperClass->tamethode();
// $taSuperClass->attribut1;
// taclass::tamethode2('jaune', 'rouge');

 ?>
