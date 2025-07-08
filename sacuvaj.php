<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ime = $_POST['ime'] ?? '';
    $nasumican = $_POST['nasumican'] ?? '';
    $mesec = $_POST['mesec'] ?? '';
    $godina = $_POST['godina'] ?? '';
    $broj2 = $_POST['broj2'] ?? '';
    $iznos = $_POST['iznos'] ?? '';
    $vreme = date("Y-m-d H:i:s");

    $red = "$vreme | $ime | $nasumican | $mesec | $godina | $broj2 | $iznos\n";
    file_put_contents("podaci.txt", $red, FILE_APPEND);
    echo "Uspešno sačuvano!";
}
?>
