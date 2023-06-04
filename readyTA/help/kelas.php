<!DOCTYPE html>
<html>
<head>
    <title>Les Online - Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
    </style>
</head>
<body>
    <div id="header">
        <h1>Les Online - Pembayaran</h1>
    </div>
    <div id="content">
        <h2>Detail Pembayaran</h2>

        <?php
        // Daftar harga kelas
        $harga_kelas = array(
            "matematika" => 100000,
            "bahasa_inggris" => 90000,
            "Fisika" => 95000,
            "kimia" => 85000
        );

        // Cek apakah parameter mata_pelajaran ada di URL
        if (isset($_GET['mata_pelajaran'])) {
            $mata_pelajaran = $_GET['mata_pelajaran'];

            // Cek apakah mata pelajaran tersedia dalam daftar harga_kelas
            if (array_key_exists($mata_pelajaran, $harga_kelas)) {
                $harga = $harga_kelas[$mata_pelajaran];
                echo "<p>Anda telah memilih kelas $mata_pelajaran.</p>";
                echo "<p>Total pembayaran: Rp $harga</p>";
        ?>
                <h3>Metode Pembayaran:</h3>
                <form action="proses_pembayaran.php" method="post">
                    <input type="hidden" name="mata_pelajaran" value="<?php echo $mata_pelajaran; ?>">
                    <input type="hidden" name="harga" value="<?php echo $harga; ?>">
                    <input type="radio" name="metode_pembayaran" value="transfer_bank"> Transfer Bank<br>
                    <input type="radio" name="metode_pembayaran" value="e_wallet"> E-Wallet<br>
                    <input type="radio" name="metode_pembayaran" value="kartu_kredit"> Kartu Kredit<br>
                    <br>
                    <input type="submit" name="submit" value="Bayar">
                </form>
        <?php
            } else {
                echo "<p>Mata pelajaran tidak valid.</p>";
            }
        }
        ?>
    </div>
    <div id="footer">
        <p>Hak Cipta &copy; 2023 Les Online</p>
    </div>
</body>
</html>
