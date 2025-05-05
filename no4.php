<?php
interface Pembayaran
{
  public function prosesBayar($jumlah);
}

class BayarTunai implements Pembayaran
{
  public function prosesBayar($jumlah)
  {
    echo "Pembayaran lagi diproses lewat tunai sebesar Rp. " .
      number_format($jumlah, 0, ",", ".") .
      " yaa...<br><br>";
  }
}
class BayarTransfer implements Pembayaran
{
  public function prosesBayar($jumlah)
  {
    echo "Pembayaran lagi diproses lewat transfer sebesar Rp. " .
      number_format($jumlah, 0, ",", ".") .
      " yaa...<br><br>";
  }
}

$tunai = new BayarTunai();
$transfer = new BayarTransfer();

$tunai->prosesBayar(1000000);
$transfer->prosesBayar(5000000);
?>