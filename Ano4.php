<?php
abstract class Hewan
{
  protected $nama;
  public function __construct($nama)
  {
    $this->nama = $nama;
  }
  abstract public function suara();
  public function tampilkanNama()
  {
    echo "Nama Hewan: $this->nama<br>";
  }
}

class Kucing extends Hewan
{
  public $suara;
  public function __construct($nama, $suara)
  {
    parent::__construct($nama);
    $this->suara = $suara;
  }
  public function suara()
  {
    return $this->suara;
  }
}

class Ayam extends Hewan
{
  public $suara;
  public function __construct($nama, $suara)
  {
    parent::__construct($nama);
    $this->suara = $suara;
  }
  public function suara()
  {
    return $this->suara;
  }
}

$hewan1 = new Kucing("Kucing", "Meowwww");
$hewan2 = new Kucing("Ayam", "Ptokkkukukkruyukk");

$hewan1->tampilkanNama();
echo "Suaranya: " . $hewan1->suara() . "<br><br>";
$hewan2->tampilkanNama();
echo "Suaranya: " . $hewan2->suara();
?>