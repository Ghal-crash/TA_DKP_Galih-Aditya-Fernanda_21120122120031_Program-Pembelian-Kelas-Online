<!DOCTYPE html>
<html>
<head>
  <title>Kelas Online</title>
  <link rel="stylesheet" href="./style.css"/>
</head>
<body>
  <nav>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Tentang</a></li>
      <li><a href="../loginPage/index.php">Logout</a></li>
    </ul>
  </nav>
  
  <div class="hero">
    <h2>Belajar Electrical pada Website ini</h2>
    <p>Akses alat lengkap dan berbasis pada perangkat Industri</p>
    <a href="#features" class="btn">Mulai Belajar</a>
  </div>
  
  <div class="features" id="features">
    <h3>Pilihan Kelas</h3>
    <div class="card-container">
        <div class="card" value="mps">
          <form action="../payPage/pay_kelas.php" method="GET">
            <img src="./img/mps.jpg" alt="Kelas 1" class="img">
            <h4>MPS Festo</h4>
            <p>Pada kelas ini membahas tentang <b> Pick and Place</b></p>
            </label>
            <input type="submit" name="kelas" class="btn" value="Beli Kelas MPS">
          </div>
        <div class="card">
          <form action="../payPage/pay_kelas.php" method="GET">
              <img src="./img/plcScada.jpg" alt="Kelas 2" class="img">
              <h4>SCADA & HMI</h4>
              <p>Pada kelas ini membahas tentang <b> SCADA dan HMI</b></p>
              </a><input type="submit" name="kelas" class="btn" value="Beli Kelas Scada">
              </form>
        </div>
        <div class="card">
          <form action="../payPage/pay_kelas.php" method="GET">
              <img src="./img/plcOmron.jpg" alt="Kelas 3" class="img">
              <h4>SKT</h4>
              <p>Pada kelas ini membahas tentang Sistem Kontrol Terprogram dengan <b>PLC OMRON</b></p>
              <input type="submit" name="kelas" class="btn" value="Beli Kelas SKT">
          </form>
        </div>
        <div class="card">
          <form action="../payPage/pay_kelas.php" method="GET"> 
              <img src="./img/plcSiemens.png" alt="Kelas 4" class="img">
              <h4>SKEP</h4>
              <p>Pada kelas ini membahas tentang Sistem Kontrol ElektroPneumatik dengan <b>PLC SIEMENS</b></p>
              <input type="submit" name="kelas" class="btn" value="Beli Kelas SKEP">
          </form>
        </div>
        <div class="card">
        <form action="../payPage/pay_kelas.php" method="GET">
              <img src="./img/arduino.jpg" alt="Kelas 5" class="img">
              <h4>SKEE</h4>
              <p>Pada kelas ini membahas tentang Sistem Kontrol Elektromekanik dan Elektronik dengan <b>mikrokontroller</b></p>
              <input type="submit" name="kelas" class="btn" value="Beli Kelas SKEE">
          </form>
        </div>
    </div>
  </div>
  
  <footer>
    &copy; 2023 TA DKP. All rights reserved.
  </footer>
</body>
</html>
