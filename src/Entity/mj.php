<?php 

class Mj {
   public $name;

function __construct($name)
{
    $this->name = $name;
}

public function name(){
    return $this->name;
}
}

$read="";
while (($read === "")) {
    $read  = readline("entrez Le nom du MJ : ");
}
$mj = New MJ($read);
echo $read;

?>