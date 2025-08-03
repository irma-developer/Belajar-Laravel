<?php
$nama = $_POST ["nama"];
$umur = $_POST ["umur"];
$makanan = $_POST ["makanan"];

echo "Halo $nama, umur kamu $umur tahun.<br>";

switch($makanan){
    case 1:
        echo "makanan favorit kamu: Bakso";
        break;
    case 2:
        echo "makanan favorit kamu: Mie ayam";
        break;
    case 3:
        echo "makanan favorit kamu: Seblak";
        break;
    default:
        echo "Kamu belum pilih makanan";

}

?>