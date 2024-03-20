<?php
class diamond
{
    //atribut
    public $name;
    public $damage;
    public $harga;

    //method
    public function __construct($name,$damage,$harga)
    {
    $this->name = $name;
    $this->damage = $damage;
    $this->harga = $harga;
        
    }
    

    public function getDetail (){
        echo "Name $this->name <br>";
        echo "Damage $this->damage <br>";
        echo "Price $this->harga <br>";
        echo "<br>=============================<br>";

    }

}

//buat object 
$diamond1 = new Diamond ("Pearl",5500,200000000);
$diamond1->getDetail ();

$diamond2 = new Diamond ("Amber White",23000,400000000000000);
$diamond2->getDetail();

?>