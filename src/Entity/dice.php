<?php 



class Dice {
    public $number1;
    public $number2 ;
    function __construct($number1,$number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
 
    }
    public function valeurDe1()
{
    return $this->number1;
}
    public function valeurDe2()
{
    return $this->number2;
}



}


// $dice = new Dice(1,6);
 echo rand($dice->valeurDe1(),$dice->valeurDe2())."\n";




?>