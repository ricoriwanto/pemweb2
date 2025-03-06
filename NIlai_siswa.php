<?php

  if (isset($_POST['submit'])) {

  $Nama = $_POST['Nama'];
  $Matkul = $_POST['Matkul'];
  $Nilai_uts = $_POST['Nilai_uts'];
  $Nilai_uas = $_POST['Nilai_uas'];
  $Nilai_Tugas = $_POST['Nilai_Tugas'];

  echo "<p>Nama : $Nama</p>";
  echo "<p>Mata Kuliah : $Matkul</p>";
  echo "<p>Nilai UTS : $Nilai_uts</p>";
  echo "<p>Nilai UAS : $Nilai_uas</p>";
  echo "<p>Nilai Tugas : $Nilai_Tugas</p>";
  }
  //satus kelulusan
  $Nilai_Total = ($Nilai_uts * 0.3) + ($Nilai_uas * 0.35) + ($Nilai_Tugas * 0.35);

  //chec nilai total
  if ($Nilai_Total >= 55) {
    echo "<p>Status : Lulus.</p>";
  }else{
    echo "<p>Status : Tidak Lulus.</p>";
  }
    if ($Nilai_Total >= 85 && $Nilai_Total <= 100 ){
        $Grade = "A";
    } elseif ($Nilai_Total >= 70 && $Nilai_Total < 85) {
        $Grade = "B";
    } elseif ($Nilai_Total >= 56 && $Nilai_Total < 70) {
        $Grade = "C";
    } elseif ($Nilai_Total >= 36 && $Nilai_Total < 56) {
        $Grade = "D";
    } elseif ($Nilai_Total >= 0 && $Nilai_Total < 36) {
        $Grade = "E";
    } else {
        $Grade = "I";
    }
    switch ($Grade) {
        case "A":
            $Predikat = "Sangat Memuaskan";
            break;
        case "B":
            $Predikat = "Memuaskan";
            break;
        case "C":
            $Predikat = "Cukup";
            break;
        case "D":
            $Predikat = "Kurang";
            break;
        case "E": 
            $Predikat = "Sangat Kurang";
            break;
        case "I":
            $Predikat = "Tidak Ada";
            break;
}
echo "<p>Grade : $Grade</p>";
echo "<p>Predikat : $Predikat</p>";
   
?>