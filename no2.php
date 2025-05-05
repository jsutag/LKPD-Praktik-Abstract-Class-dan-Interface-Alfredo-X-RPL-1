<?php

interface Kendali
{
  public function hidupkan();
  public function matikan();
}

class Lampu implements Kendali
{
  public function hidupkan()
  {
    echo "Lampu dinyalakan<br>";
  }
  public function matikan()
  {
    echo "Lampu dimatikan<br><br>";
  }
}

class Tv implements Kendali
{
  public function hidupkan()
  {
    echo "Tv dinyalakan<br>";
  }
  public function matikan()
  {
    echo "Tv dimatikan";
  }
}

$Lampu = new Lampu();
$Tv = new Tv();

$Lampu->hidupkan();
$Lampu->matikan();

$Tv->hidupkan();
$Tv->matikan();
?>