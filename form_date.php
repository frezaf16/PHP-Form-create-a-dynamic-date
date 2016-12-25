<?php
/*
*  Program Name: form_date.php
*  Description: code to display the choice of either the date, month, year
**/
 
$namaBulan = array(
  1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni",
  "Juli", "Agustus",  "September", "Oktober",  "November", "Desember"
  );
$hariIni = time(); // menyimpan tanggal hari ini
$f_hari = date("M-d-Y", $hariIni); // format tanggal hari ini
$tahun = date("Y", $hariIni); // ambil tahun dari hari ini
 
?>
 
  <h3>Today's Date <?php echo $f_hari; ?></h3>
 
  <form action="" method="get" accept-charset="utf-8">
  <!-- Showing months -->
  <select name="bulan">
  <?php /* Create a list of options for the month */
  // awal looping
  for ($n=1; $n <= 12 ; $n++) { ?>
  <option value="<?php echo $n; ?>" > <?php echo $namaBulan[$n]; ?> </option>
  <?php } // akhir looping?>
  </select>
 
  <!-- displays the day -->
  <select name="day" >
  <?php /* Create a list of options for day */
  for ($n=1; $n <= 31 ; $n++) { ?>
  <option value="<?php echo $n; ?>" > <?php echo $n; ?> </option>
  <?php } ?>
  </select>
 
  <!-- featuring year -->
  <select name="year" >
  <?php /* Create a list of options for the year */
  for ($n= $tahun - 4; $n <= $tahun+5 ; $n++) { ?>
  <option value="<?php echo $n; ?>" > <?php echo $n; ?> </option>
  <?php } ?>
  </select>
  </form>
 <span class="copy-text">Copyright &copy; 2016 Coding-Arena</span>
