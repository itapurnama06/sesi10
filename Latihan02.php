<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan form</title>
</head>
<body>
<form name="Latihan1" onsubmit="return checkform(this)">
            <div>
                NIM
                <input type="text" name="txNIM" id="txNIM">
            </div>

            <div>
                Jenis Kelamin
                <input type="radio" name="txJK" id="txJK" value="L">Laki-Laki
                <input type="radio" name="txJK" id="txJK " value="P">Perempuan
            </div>

            <div>
                Jurusan
                <select name="txJURUSAN" id="txJurusan">
                    <option value="MTI">MTI</option>
                    <option value="KAB">KAB</option>
                    <option value="DKV">DKV</option>
                </select>
            </div>

            <div>
                Hobby
                <input type="checkbox" name="txhobbybola" id="txhobbybola" value="1">Sepak Bola
                <input type="checkbox" name="txhobbybasket" id="txhobbybasket" value="2">Bola Basket
                <input type="checkbox" name="txhobbyberenang" id="txhobbyberenang" value="3">Berenang
            </div>

            <div>
                <button type="submit"> Kirim Data </button>
            </div>
        </form>
</body>
</html>