<!DOCTYPE html>
<html>
<head>
    <title>Les Online</title>
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
        <h1>Les Online</h1>
    </div>
    <div id="content">
        <h2>Selamat datang di platform les online!</h2>
        <p>Di sini, Anda dapat belajar berbagai mata pelajaran secara online dengan guru-guru yang berkualitas.</p>
        <h3>Pilih mata pelajaran yang ingin Anda pelajari:</h3>

        <form action="kelas.php" method="GET">
            <input type="submit" name="mata_pelajaran" value="matematika">
            <input type="submit" name="mata_pelajaran" value="bahasa Inggris">
            <input type="submit" name="mata_pelajaran" value="Fisika">
            <input type="submit" name="mata_pelajaran" value="Kimia">
        </form>
    </div>
    <div id="footer">
        <p>Hak Cipta &copy; 2023 Les Online</p>
    </div>
</body>
</html>
