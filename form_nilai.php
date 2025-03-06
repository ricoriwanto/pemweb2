<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form NIlai</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">form nilai mahasiswa</h5> 
<form method="POST" action="NIlai_siswa.php">
  <div class="form-group row">
    <label for="Name" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="Nama" name="Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="Matkul" name="Matkul" class="custom-select">
        <option value="DDP">Dasar Dasar pemograman</option>
        <option value="pw1">Pemograman web 1</option>
        <option value="pw2">Pemograman Web 2</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="Nilai_uts" name="Nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_uas" class="col-4 col-form-label">Nilai Uas</label> 
    <div class="col-8">
      <input id="Nilai_uas" name="Nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai Tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="Nilai_Tugas" name="Nilai_Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</div>
</div>
</body>
</html>