<?php

// mengembalikan nilai berupa array yang berisi nilai dari setiap fungsi 
function dataNilai($nilai){
    return [
        "tambah" => penambahan($nilai),
        "kurang" => pengurangan($nilai),
        "kali"   => perkalian($nilai),
        "bagi"   => pembagian($nilai)
    ];
}

// Melakukan pertambahan antar bilangan
// dan mengembalikan nilai menggunakan fungsi return
function penambahan($nilai){
    return $nilai["bil_1"]+=$nilai["bil_2"];
}

// melakukan pengurangan antar bilangan
// dan mengembalikan nilai menggunakan fungsi return
function pengurangan($nilai){
    return $nilai["bil_1"]-=$nilai["bil_2"];

}

// melakukan perkalian antar bilangan
// dan mengembalikan nilai menggunakan fungsi return
function perkalian($nilai){
    return $nilai["bil_1"]*=$nilai["bil_2"];

}
// melakukan pembagian antar bilangan
// dan mengembalikan nilai menggunakan fungsi return
// Mengambil 4 karakter dari depan dengan fungsi substr()
function pembagian($nilai){
    return substr($nilai["bil_1"]/=$nilai["bil_2"], 0 , 4);

}
