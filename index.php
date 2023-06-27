<html>
<head>
    <title>Tutorial Membuat Script PHP Menghitung Luas Segitiga</title>
</head>
<body>
    <h2>Form Hitung Luas Segitiga Dengan PHP</h2>
    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Alas</td>
                <td>:</td>
                <td><input type="text" name="alas" required ></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <!-- Tulis kode PHP disini -->
    <?php
    if(isset($_POST['submit'])){
        $alas        = $_POST['alas'];
        $tinggi      = $_POST['tinggi'];
               
        // menghitung luas segitiga
        $luas_segitiga = 0.5*($alas*$tinggi);
                
        echo "Hasil hitung luas segitiga adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Alas = $alas<br />";
        echo "Tinggi = $tinggi<br />";
        echo "Maka luas segitiga sama dengan [0.5 x ($alas x $tinggi) ] = $luas_segitiga<br />";
    }
?>
</body>
</html>