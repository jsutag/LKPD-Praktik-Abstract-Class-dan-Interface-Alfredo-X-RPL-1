<?php
abstract class Karyawan
{
  protected $nama;
  public function __construct($nama)
  {
    $this->nama = $nama;
  }
  public function Nama()
  {
    echo "Nama Karyawan: $this->nama <br>";
  }
  abstract public function hitungGaji();
}

class KaryawanTetap extends Karyawan
{
  private $gajiBulanan;
  public function __construct($nama, $gajiBulanan)
  {
    parent::__construct($nama);
    $this->gajiBulanan = $gajiBulanan;
  }
  public function hitungGaji()
  {
    return $this->gajiBulanan;
  }
}

class KaryawanHarian extends Karyawan
{
  private $jamKerja;
  private $upahPerjam;

  public function __construct($nama, $jamKerja, $upahPerjam)
  {
    parent::__construct($nama);
    $this->jamKerja = $jamKerja;
    $this->upahPerjam = $upahPerjam;
  }
  public function hitungGaji()
  {
    return $this->jamKerja * $this->upahPerjam;
  }
}

$Karyawan1 = new KaryawanTetap("Iqbal", 20000000);
$Karyawan2 = new KaryawanHarian("Fairuz", 9, 500000);

$Karyawan1->Nama();
echo "Gaji Karyawan: " . $Karyawan1->hitungGaji() . "<br><br>";

$Karyawan2->Nama();
echo "Gaji Karyawan: " . $Karyawan2->hitungGaji() . "<br><br>";
?>