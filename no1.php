<?php

interface HewanPeliharaan
{
  public function bersuara();
  public function makan();
}

class Kucing implements HewanPeliharaan
{
  public function bersuara()
  {
    echo "Meonww.... Meowww<br>";
  }
  public function makan()
  {
    echo "Kucing lagi makan wiskas<br><br>";
  }
}

class Anjing implements HewanPeliharaan
{
  public function bersuara()
  {
    echo "Gukk gukk Gukk gukk<br>";
  }
  public function makan()
  {
    echo "Anjing lagi makan daging";
  }
}

$hewan1 = new Kucing();
$hewan2 = new Anjing();

$hewan1->bersuara();
$hewan1->makan();

$hewan2->bersuara();
$hewan2->makan();
?>