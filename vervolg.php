<?php

$minimumleeftijd = 18;   //Vul hier de minimum leeftijd wanneer Truus ....... mag worden

class Mens {
    public $naam;
    public $geslacht;
    public $geslachtsdeel;
    public $kleur;
    public $leeftijd;
    
    public function __construct($naam, $geslacht, $geslachtsdeel, $kleur, $leeftijd){
        $this->naam = $naam;
        $this->geslacht = $geslacht;
        $this->geslachtsdeel = $geslachtsdeel;
        $this->kleur = $kleur;
        $this->leeftijd = $leeftijd;
    }
    
    
    function verhaaltje($naam){
		$geslacht == "vrouw" ? $het = "haar" : $het = "zijn";		
        echo  $this->naam." is een ".$this->geslacht." en mag ".$naam." met ".$het.".$this->geslachtsdeel." ...........";
    }
}


//////ooeepppsss

$piet = new Mens('Piet', 'man', '.....', 'blank', '45');
$truus = new Mens('Truus', 'vrouw', '.....', 'blank', '16');
$berta = new Mens('Berta', 'vrouw', '.....', 'blank', '65');



        if($truus->leeftijd > $minimumleeftijd){
            $piet->verhaaltje($truus->naam);
            
        }else{
            echo $piet->naam . " moet z'n broek aanhouden als ". $truus->naam." langs komt.";
        }
        
        
        echo "<br>";
        echo "<br>";
    
        
        if($berta->leeftijd > $minimumleeftijd){
            $piet->verhaaltje($berta->naam);
        }else {
            echo $piet->naam . " moet z'n broek aanhouden ". $berta->naam." langs komt.";
        }


