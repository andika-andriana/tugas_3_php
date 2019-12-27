<?php
$saldo = 150000;
$bunga = 12.5;
$bunga_tahunan = ($bunga / 100)*$saldo;
$hasil = $saldo + $bunga_tahunan;

echo("
<p>
  Tabungan Awal = Rp $saldo <br />
  Bunga Setahun = $bunga % <br/>
  Total Tabungan Setahun = ? <br />
  Jawaban : Rp $hasil
</p>
");
?>
