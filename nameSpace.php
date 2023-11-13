<?php

// Buat namespace
namespace Data\Satu;

// Import data dari conflict
require "conflict.php";

// Buat object dari namespace yang di buat
$conflict1 = new \Data\Satu\Conflict(); // Sesuaikan namespace yang benar
$conflict2 = new \Data\Dua\Conflict2(); // Sesuaikan namespace yang benar

// Import data helper
require "helper.php";

// Tampilkan helper menggunakan echo
echo \Helper\helpMe(); // Perbaiki pemanggilan fungsi dengan menggunakan tanda kurung

// Dummy class untuk namespace Data\Satu
class Conflict {
    // Isi class Conflict di sini
}

// Dummy namespace dan class untuk Data\Dua
namespace Data\Dua; {
    class Conflict2 {
        // Isi class Conflict2 di sini
    }
}
