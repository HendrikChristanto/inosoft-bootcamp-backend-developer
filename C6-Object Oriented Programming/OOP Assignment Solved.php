<?php
	class Kalkulator
	{
		protected float $daya;
		protected float $dayaMaksimal;
		protected float $penggunaanDaya;

		public function __construct()
		{
			$this->daya = 0;
			$this->dayaMaksimal = 100;
			$this->penggunaanDaya = $this->dayaMaksimal * 10 / 100;
			echo "Kalkulator berhasil dibuat\n";
		}

		public function pengisianDaya($dayaTambahan)
		{
			$this->daya += $dayaTambahan;
			if ($this->daya > $this->dayaMaksimal) $this->daya = $this->dayaMaksimal;
			echo "Daya berhasil ditambahkan\n";
		}

		public function penguranganDaya()
		{
			if ($this->daya < $this->penggunaanDaya){
				echo "Daya tidak cukup\n";
				return false;
			}
			$this->daya -= $this->penggunaanDaya;
			return true;
		}

		public function tampilkanDaya()
		{
			echo "Jumlah daya saat ini " . $this->daya . "\n";
		}
		
		public function penjumlahan($bil1, $bil2)
		{
			if (!$this->penguranganDaya()) return;
			echo $bil1 . " + " . $bil2 . " = ";
			echo ($bil1 + $bil2) . "\n";
		}
		
		public function pengurangan($bil1, $bil2)
		{
			if (!$this->penguranganDaya()) return;
			echo $bil1 . " - " . $bil2 . " = ";
			echo ($bil1 - $bil2) . "\n";
		}
		
		public function perkalian($bil1, $bil2)
		{
			if (!$this->penguranganDaya()) return;
			echo $bil1 . " * " . $bil2 . " = ";
			echo ($bil1 * $bil2) . "\n";
		}
		
		public function pembagian($bil1, $bil2)
		{
			if (!$this->penguranganDaya()) return;
			$hasil = $bil2 == 0 ? "tidak terdefinisi" : ($bil1 / $bil2);
			echo $bil1 . " / " . $bil2 . " = ";
			echo $hasil . "\n";
		}

		public function pemangkatan($bil, $pangkat)
		{
			if (!$this->penguranganDaya()) return;
			$hasil = pow($bil, $pangkat) > 1000000 ? "Nilai diluar batas yang ditentukan" : pow($bil, $pangkat);
			echo $bil . " ^ " . $pangkat . " = ";
			echo $hasil . "\n";
		}
	}

	class KalkulatorHemat extends Kalkulator{
		public function __construct()
		{
			$this->daya = 0;
			$this->dayaMaksimal = 100;
			$this->penggunaanDaya = $this->dayaMaksimal * 5 / 100;
			echo "Kalkulator hemat berhasil dibuat\n";
		}
	}
	
	$kalkulator = new Kalkulator();
	$kalkulator->tampilkanDaya();
	echo "\n";
	$kalkulator->pengisianDaya(40);
	$kalkulator->tampilkanDaya();
	echo "\n";
	$kalkulator->penjumlahan(5, 2);
	$kalkulator->pengurangan(5, 2);
	$kalkulator->tampilkanDaya();
	$kalkulator->perkalian(5, 2);
	$kalkulator->pembagian(5, 0);
	echo "\n";
	$kalkulator->tampilkanDaya();
	$kalkulator->penjumlahan(5, 2);	
	echo "\n";
	$kalkulator->pengisianDaya(20);
	$kalkulator->pemangkatan(5, 3);
	$kalkulator->pemangkatan(1001, 2);
	echo "\n";
	$kalkulatorHemat = new KalkulatorHemat();
	$kalkulatorHemat->tampilkanDaya();
	echo "\n";
	$kalkulatorHemat->pengisianDaya(120);
	$kalkulatorHemat->tampilkanDaya();
	echo "\n";
	$kalkulatorHemat->penjumlahan(5, 4);
	$kalkulatorHemat->tampilkanDaya();
?>