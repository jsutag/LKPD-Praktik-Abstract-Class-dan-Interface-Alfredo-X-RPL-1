<?php
abstract class Kendaraan
{
  protected $merk;
  public function __construct($merk)
  {
    $this->merk = $merk;
  }
  abstract public function nyalakanMesin();
  public function info()
  {
    echo "Merk Kendaraan: $this->merk<br>";
  }
}

class Mobil extends Kendaraan
{
  public function nyalakanMesin()
  {
    echo "Mesin mobil dinyalakan..<br><br>";
  }
}

class Motor extends Kendaraan
{
  public function nyalakanMesin()
  {
    echo "Mesin motor dinyalakan..<br>";
  }
}

$mobil = new Mobil("Rolls Royce");
$motor = new Motor("Harley Davidson");

$mobil->info();
$mobil->nyalakanMesin();

$motor->info();
$motor->nyalakanMesin();
?>