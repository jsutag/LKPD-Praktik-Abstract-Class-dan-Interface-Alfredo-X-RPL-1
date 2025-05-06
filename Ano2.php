<?php

abstract class BangunDatar
{
  abstract public function hitungLuas();
}

class Persegi extends BangunDatar
{
  private $sisi;
  public function __construct($sisi)
  {
    $this->sisi = $sisi;
  }
  public function hitungLuas()
  {
    return $this->sisi * $this->sisi;
  }
}

class Lingkaran extends BangunDatar
{
  private $jari;
  public function __construct($jari)
  {
    $this->jari = $jari;
  }
  public function hitungLuas()
  {
    return (22 / 7) * $this->jari * $this->jari;
  }
}

$Persegi = new Persegi(10);
$Lingkaran = new Lingkaran(7);

echo "Luas persegi dengan sisi 10 adalah: " .
  $Persegi->hitungLuas() .
  "<br><br>";
echo "Luas Lingkaran dengan jari jari 7 adalah: " . $Lingkaran->hitungLuas();

?>
