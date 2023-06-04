<!DOCTYPE html>
<html>
<head>
    <title>Nota Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
        }
        #header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        #content {
            margin: 20px;
        }
        #footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .success-message {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #f5f5f5;
        }
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        .container {
        padding: 20px;
        border: 1px solid #ccc;
        text-align: center; 
        place-items: center;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        width: 30%;
        padding: 15px;
        margin: 0 20px 20px;
        margin-bottom: 30px;
        text-align: center;
        }

        .container h2 {
        margin-top: 0;
        }

        .btn-home{
            font-family: sans-serif;
            font-size: 12pt;
            align-items: center;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            height: 35px;
            border-radius: 4px;
            width: 25%;
            color: white;
            background: -webkit-linear-gradient(right,#003366,#004080,#0059b3, #0073e6);
        }
</style>

    </style>
</head>
<body>
    <div class="container"> 
    <div id="content">
        <h2>Proses Pembayaran</h2>

        <?php
        class Kelas {
            private $pilihan_kelas;
            private $harga;
        
            public function setpilihanKelas($pilihan_kelas) {
                $this->pilihan_kelas = $pilihan_kelas;
            }
        
            public function getpilihanKelas() {
                return $this->pilihan_kelas;
            }
        
            public function setHarga($harga) {
                $this->harga = $harga;
            }
        
            public function getHarga() {
                return $this->harga;
            }
        }
        
        $kelas = new Kelas();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pilihan_kelas = $_POST['kelas'];
            $harga = $_POST['harga'];
            $metode_pembayaran = $_POST['metode_pembayaran'];
        
            $kelas->setpilihanKelas($pilihan_kelas);
            $kelas->setHarga($harga);

            echo "<div class='success-message'>";
            echo "Anda telah berhasil membeli kelas $pilihan_kelas dengan harga Rp $harga melalui metode pembayaran $metode_pembayaran.";
            echo "</div>";
        }else {
            echo "<p>Halaman ini tidak dapat diakses secara langsung.</p>";
        }
        
        $pilihan_kelas = $kelas->getpilihanKelas();
        $harga = $kelas->getHarga();
        
        ?>
        <br><br>
            <a href="../homePage/index.php"><input type="submit" value="beranda" class="btn-home"></a>
    </div>
    </div>
</body>
</html>
