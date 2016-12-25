<?php
/*
*  Nama Program  : form_tanggal.php
*  Deskripsi  : kode untuk menampilkan pilihan berupa tanggal, bulan, tahun
**/
 
$namaBulan = array(
  1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni",
  "Juli", "Agustus",  "September", "Oktober",  "November", "Desember"
  );
$hariIni = time(); // menyimpan tanggal hari ini
$f_hari = date("M-d-Y", $hariIni); // format tanggal hari ini
$tahun = date("Y", $hariIni); // ambil tahun dari hari ini
 
?>
 
  <h3>Hari ini Tanggal <?php echo $f_hari; ?></h3>
 
  <form action="" method="get" accept-charset="utf-8">
  <!-- Menampilkan bulan -->
  <select name="bulan">
  <?php /* Buat daftar pilihan untuk bulan */
  // awal looping
  for ($n=1; $n <= 12 ; $n++) { ?>
  <option value="<?php echo $n; ?>" > <?php echo $namaBulan[$n]; ?> </option>
  <?php } // akhir looping?>
  </select>
 
  <!-- menampilkan hari -->
  <select name="hari" >
  <?php /* Buat daftar pilihan untuk hari */
  for ($n=1; $n <= 31 ; $n++) { ?>
  <option value="<?php echo $n; ?>" > <?php echo $n; ?> </option>
  <?php } ?>
  </select>
 
  <!-- menampilkan tahun -->
  <select name="tahun" >
  <?php /* Buat daftar pilihan untuk tahun */
  for ($n= $tahun - 4; $n <= $tahun+5 ; $n++) { ?>
  <option value="<?php echo $n; ?>" > <?php echo $n; ?> </option>
  <?php } ?>
  </select>
  </form>
 <span class="copy-text">Copyright &copy; 2016 Coding-Arena</span>
