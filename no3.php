<?php

interface Cetak
{
  public function cetak();
}

class Printer implements Cetak
{
  public function cetak()
  {
    echo "Printer mencetak mohon tunggu....<br><br>";
  }
}
class Scanner implements Cetak
{
  public function cetak()
  {
    echo "Scanner mencetak mohon tunggu....";
  }
}

$printer = new Printer();
$scanner = new Scanner();

$printer->cetak();
$scanner->cetak();
?>