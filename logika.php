<?php
// Penulisan array yang lama
$nama = array ("Elia","Grace","Melpen");

// Penulisan array yang baru
$nama = ["Elia","Grace","Melpen","Jekson","Delvi","Obed"];

// Var_dump($namaSiswa[0]);

echo "<br>". $nama[0];
echo "<br>". $nama[1];
echo "<br>". $nama[2];

foreach ($nama as $siswa)
{
    echo "<br>";
}

//Array multi demensi
$namaSacode =[
    [
        "namadepan"=> "Jekson",
        "namabelakang" =>"Tabuni",
        "Usia" => "30",
        "alamat" =>"Doyo kab. Sentani"
    ],
    [
        "namadepan"=> "Elia",
        "namabelakang" =>"Itlay",
        "Usia" => "30",
        "alamat" =>"Doyo kab. Sentani"
    ],
    [
        "namadepan"=> "Abet",
        "namabelakang" =>"Nau",
        "Usia" => "30",
        "alamat" =>"Doyo kab. Sentani"
    ]
];
// Tampilkan data
$i =0;
foreach($namaSacode as $nama)
{
    echo "<br> <br> <br> Siswa No ".++$i ." <br>";
    echo "Nama :".$nama["namadepan"]." ".$nama["namabelakang"] ."<br>";
    echo "alamat :".$nama["alamat"] ."<br>";
    echo "usia :".$nama["Usia"] ."<br>";
}