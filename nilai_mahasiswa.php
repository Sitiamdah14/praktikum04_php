<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Nilai Mahasiswa</title>
</head>
<body class="bg-warning">
<?php
class nilaiMahasiswa {
    var $matkul;
    var $nilai;
    var $nim;

    function __construct($nim, $nilai, $matkul){
        $this->nim = $nim;
        $this->nilai = $nilai;
        $this->matkul = $matkul;
    }

    function grade(){
        if ($this->nilai >= 56){
            return 'LULUS';
        }else {
            return 'TIDAK LULUS';
        }
    }

    function hasil(){
        if ($this->nilai <= 35){
            return 'E';
        }elseif ($this->nilai <= 55){
            return 'D';
        }elseif ($this->nilai <= 69){
            return 'C';
        }elseif ($this->nilai <= 84){
            return 'B';
        }elseif ($this->nilai <= 100){
            return 'A';
        }
    }
}
?>

<nav class="navbar navbar-expand-lg navbar-info bg-info">
  <div class="container">
    <a class="navbar-brand" href="#">WEB 02</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            REVIEW PHP
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           PHP5 OOP
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<form class="container mt-4" method="POST" autocomplete="off" action="nilai_mahasiswa.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilih Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <!-- <option value="">Pilih Mata Kuliah</option> -->
        <option value="Basis Data">Basis Data</option>
        <option value="UI/UX">UI/UX</option>
        <option value="Pemrograman Web">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-edit"></i>
          </div>
        </div> 
        <input id="nilai" name="nilai" placeholder="Masukan Nilai" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>

  <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if(empty($_POST["proses"])) {
            $nim = $_POST['nim'];
            $matkul = $_POST['matkul'];
            $nilai = $_POST['nilai'];
            $data = new nilaiMahasiswa($nim, $nilai, $matkul);
        
            echo 'NIM : '.$nim;
            echo '<br/>Matkul : '.$matkul;
            echo '<br/>Nilai : '.$nilai;
            echo '<br/>Hasil : '.$data->hasil();
            echo '<br/>Grade : '.$data->grade();
          }
        }else{
          echo "*Format belum diisi"; 
        }
        ?>
  
</form>
</body>
</html>