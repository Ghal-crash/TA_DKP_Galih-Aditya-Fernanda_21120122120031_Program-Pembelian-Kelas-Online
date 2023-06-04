<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
    <style>
html,body{
    margin: auto;
    padding: 0;
  display: flex;
  height: 100vh;
  width: 100%;
  justify-content: center;
  place-items: center;
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
.box {
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 20px;
}
.box p {
  margin: 0;
}
.box h3 {
  margin-top: 20px;
}
.payment-methods label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}
.payment-methods input[type="radio"] {
  margin-right: 10px;
}
.payment-methods input[type="submit"] {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}
.payment-methods input[type="submit"]:hover {
  background-color: #555;
}
.bayar{
  border-radius: 5px;
  width: 15%;
  height: 35px;
  color: white;
  background-color: #01831d;
}
.kembali{
  align-items: center;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  height: 35px;
  border-radius: 5px;
  width: 15%;
  color: white;
  background-color: #c90101;
}
.card-container {
position:relative;  
top: 50%;   
left: 7%;
place-items: center;
border-radius: 10px;
background-color: #fff;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
width: 80%;
padding: 15px;
margin: 0 20px 20px;
margin-bottom: 30px;
text-align: center;
}
select {
    text-align: center;
  width: 20%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  appearance: none;
  background-color: #fff;
}

select:focus {
  outline: none;
  border-color: #888;
  box-shadow: 0 0 5px #888;
}

    </style>
</head>
<body>
    <div id="content">
        <div class="card-container">
        <h2>Detail Pembayaran</h2>

        <?php
        // Daftar harga kelas
        $harga_kelas = array(
            "Beli Kelas MPS"    => array(
                "harga"         => 250000,
                "deskripsi"     => "Pada Kelas ini Anda akan mempelajari tentang penggunaan
                                    Mesin MPS(Modular Production System) Pick And Place dengan
                                    PLC SIEMENS S7300
                                    <ol>
                                    <li>Aplikasi SIMATIC MANAGER</li>
                                    <li>Wiring Ladder Diagram</li>
                                    <li>Program Sesuai Warna Barang</li>
                                    <li>Sortir,Handling, Distributing, dan Testing Barang</li>
                                    </ol>
                                    "
            ),
            "Beli Kelas Scada" => array(
                "harga"        => 275000,
                "deskripsi"    => "Pada Kelas ini Anda akan mempelajari tentang pengoperasian
                                    PLC SCADA dan HMI(Human Machine Interface) pada suatu Jaringan
                                    <ol>
                                    <li>Monitoring sistem jarak jauh</li>
                                    <li>Monitoring Gardu Induk dan Gardu Distribusi</li>
                                    <li>Mengatur Input Output PLC</li>
                                    <li>Konfigurasi koneksi HMI pada PLC</li>
                                    </ol>
                                    "
            ),
            "Beli Kelas SKT"    => array(
                "harga"         => 300000,
                "deskripsi"     => "Pada kelas ini anda akan mendapat materi tentang pengkonfigurasian
                                    PLC OMRON pada kontrol suatu Motor DC menggunakan Kontaktor
                                    <ol>
                                    <li>Pengoperasian Aplikasi CX-Programmer</li>
                                    <li>Wiring Ladder Diagram</li>
                                    <li>Wiring pada panel dan trainer</li>
                                    <li>Konfigurasi Rangkaian DOL, STARTER, dan DELTA pada DC MOTOR</li>
                                    </ol>"        
            ),
            "Beli Kelas SKEP"   =>array(
                "harga"         =>325000,
                "deskripsi"     => "Pada kelas ini anda akan mempelajari tentang Pneumatic meggunakan 
                                    PLC SIEMENS S1200 dengan pengoperasion kompressor
                                    <ol>
                                    <li>Wiring Pada papan trainer dan PLC</li>
                                    <li>Pengoperasion Aplikasi Siemens</li>
                                    <li>Konfigurasi pada Solenoid dan Valve</li>
                                    <li>Pengoperasian Kompressor</li>
                                    </ol>
                "
            ),
            "Beli Kelas SKEE"   => array(
                "harga"         => 350000,
                "deskripsi"     => "Pada kelas ini anda akan mendapat materi tentang Mikrokontroller
                                    Seperti Arduino, NodeMCU, WeMos.
                                    <ol>
                                    <li>Wiring kabel pada breadboard</li>
                                    <li>Konfigurasi Sensor untuk mikrokontroller</li>
                                    <li>Konfigurasi Arduino IDE</li>
                                    <li>Basic Bahasa Arduino</li>
                                    </ol>
                "
            ) 
        );

        // Cek apakah parameter mata_pelajaran ada di URL
        if (isset($_GET['kelas'])) {
            $pilihan_kelas = $_GET['kelas'];

            // Cek apakah mata pelajaran tersedia dalam daftar harga_kelas
            if (array_key_exists($pilihan_kelas, $harga_kelas)) {
                $harga = $harga_kelas[$pilihan_kelas]['harga'];
                $deskripsi = $harga_kelas[$pilihan_kelas]['deskripsi'];
                echo "<p>Anda telah memilih untuk $pilihan_kelas.</p>";
                echo "<p>Deskripsi Kelas $deskripsi</p>";
                echo "<p>Total pembayaran: <b>Rp$harga</b></p>";
        ?>
                <h3>Metode Pembayaran:</h3>
                <form action="proses_pembayaran.php" method="post">
                    <input type="hidden" name="mata_pelajaran" value="<?php echo $mata_pelajaran; ?>">
                    <input type="hidden" name="harga" value="<?php echo $harga; ?>">
                    <input type="hidden" name="deskripsi" value="<?php echo $deskripsi; ?>">
                    <select name="metode_pembayaran" id="metode_pembayaran">
                        <option value="ovo">OVO</option>
                        <option value="dana">DANA</option>
                        <option value="shopeepay">ShopeePay</option>
                        <option value="bri">BRI</option>
                        <option value="bca">BCA</option>
                        <option value="bni">BNI</option>
                        <option value="mandiri">MANDIRI</option>
                        <option value="gopay">Gopay</option>    
                    </select><br><br>
                    <a href="../homePage/index.php"><input type="button" class="kembali" value="kembali"></a>
                    <input type="submit" name="submit" value="Bayar" class="bayar">
                </form>
        <?php
            } else {
                echo "<p>Mata pelajaran tidak valid.</p>";
            }
        }
        ?>
        </div>
    </div>
</body>
</html>
