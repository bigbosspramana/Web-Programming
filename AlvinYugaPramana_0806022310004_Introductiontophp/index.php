<?php
echo "<h2><center>Tugas Webpro (Introduction to php)<center></h2>";
echo "<h3>Nama : Alvin Yuga Pramana</h3>";
echo "<h3>NIM : 0806022310004</h3>";
echo "<strong>Print 'Hello World'</strong><br>";
echo "Hello World<br>";
echo "<br>";

echo "<b>Print 'Hello World' 10x</b><br>";
for ($i = 0; $i < 10; $i++) {
    echo "Hello World<br>";
}
echo "<br>";

echo "<strong>Print 'Hello World' dan memberikan angka genap pada 'Hello World'</strong><br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Hello World - $i<br>";
    } else {
        echo "Hello World<br>";
    }
}
echo "<br>";

echo "<b>Print Nama-nama Bulan</b><br>";
$months = [
    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
];
echo "Daftar Bulan:<br>";
foreach ($months as $month) {
    echo $month . "<br>";
}
echo "<br>";

echo "<strong>Print hari-hari libur yang ada pada setiap bulan</strong><br>";
$holidays = [
    ["Januari", "Tahun Baru"], ["Februari", "Imlek"], ["Maret", "Nyepi"],
    ["April", "Paskah"], ["Mei", "Hari Buruh"], ["Juni", "Hari Lahir Pancasila"],
    ["Juli", "Idul Adha"], ["Agustus", "Hari Kemerdekaan"], ["September", "Tahun Baru Islam"],
    ["Oktober", "Maulid Nabi"], ["November", "Tidak ada hari libur nasional"], ["Desember", "Natal"]
];
echo "Daftar Hari Libur:<br>";
foreach ($holidays as $holiday) {
    echo $holiday[0] . " - " . $holiday[1] . "<br>";
}
echo "<br>";


function penjumlahan($a, $b) {
    return $a + $b;
}

function pengurangan($a, $b) {
    return $a - $b;
}

function perkalian($a, $b) {
    return $a * $b;
}

function pembagian($a, $b) {
    if ($b == 0) {
        return "Tidak dapat dibagi dengan nol";
    }
    return $a / $b;
}

$angka1 = 23;
$angka2 = 2;

echo "<b>Operasi Matematika</b><br>";
echo "Hasil penjumlahan <br> " . $angka1 . " + " . $angka2 . " = " . penjumlahan($angka1, $angka2) . "<br>";
echo "Hasil pengurangan <br>" . $angka1 . " - " . $angka2 . " = " . pengurangan($angka1, $angka2) . "<br>";
echo "Hasil perkalian <br>" . $angka1 . " x " . $angka2 . " = " . perkalian($angka1, $angka2) . "<br>";
echo "Hasil pembagian <br>" . $angka1 . " : " . $angka2 . " = " . pembagian($angka1, $angka2) . "<br>";
?>
