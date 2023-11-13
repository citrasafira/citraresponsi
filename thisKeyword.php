<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$citra = new Person("citra", "bengkulu");

// tambahkan value nama di object
$citra->nama = "citra";

// panggil function sayHelloNull dengan parameter
$citra->sayHelloNull("halo");

// buat object dari kelas person
$safira = new Person("safira", "jakarta");

// tambahkan value nama di object
$safira->nama = "safira";

// panggil function sayHelloNull dengan parameter null
$safira->sayHelloNull(null);
