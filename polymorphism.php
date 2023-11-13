<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Citra");
var_dump($company);

$company->programmer = new BackendProgrammer("Citra");
var_dump($company);

$company->programmer = new FrontendProgrammer("Citra");
var_dump($company);

sayHelloProgrammer(new Programmer("Citra"));
sayHelloProgrammer(new BackendProgrammer("Citra"));
sayHelloProgrammer(new FrontendProgrammer("Citra"));