<?php

require_once("include/functions.php");

echo "--------Gestion de licence logiciel--------";

echo "\nListe des employés\n";

$employer =loadanddump("datas/employees.json");
loadanddump("datas/licenses.json");
$service = loadanddump("datas/services.json");
loadanddump("datas/softs.json");



affichage(employer_par_service($employer, 'compta'), 'liste employer comta');

affichage(soft_use_employer($service, 'compta'), 'liste soft comta');