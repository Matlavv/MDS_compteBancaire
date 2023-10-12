<?php

include('impot.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $revenus = isset($_POST['revenus']) ? floatval($_POST['revenus']) : 0;

    $impot = new Impot($nom, $revenus);
    $impot->afficherImpot();
}
?>
