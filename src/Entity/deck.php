<?php class Deck {
 public $card1;
 public $card2;
 public $value1;
 public $value2;

 function __construct($card1,$card2,$value1,$value2)
 {
     $this->card1 = $card1;
     $this->card2 = $card2;
     $this->value1 = $value1;
     $this->value2 = $value2;
   
 } 
 public function card1(){
    return $this->card1;
 }
 public function card2(){
    return $this->card2;
 }

 public function value1(){
    return $this->value1;
 }
 public function value2(){
    return $this->value2;
 }

    
  }

$deck = new Deck(1,12,1,4);
$randomcard = (rand($deck->card1(),$deck->card2()));
$randomtype = (rand($deck->value1(),$deck->value2()));
echo  $randomcard;
    if ($randomtype === 1) {
        echo "coeur";
    }
    if ($randomtype === 2) {
        echo "pique";
    }
    if ($randomtype === 3) {
        echo "carreau";
    }
    if ($randomtype === 4) {
        echo "trèfle";
    }


?>