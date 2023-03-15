<?php
// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=id20205701_samy';
$user = 'id20205701_samyouicher';
$password = '/&*hX18M$A}2#QGr';
$dbh = new PDO($dsn, $user, $password);

// Requête pour récupérer les données
$sql = "SELECT period, iphone, ipad, itouch FROM exo";
$stmt = $dbh->query($sql);

// Formatage des données pour Morris.js
$data = array();
foreach ($stmt as $row) {
    $data[] = array(
        'period' => $row['period'],
        'iphone' => $row['iphone'],
        'ipad' => $row['ipad'],
        'itouch' => $row['itouch']
    );
}

// Conversion des donnée en format JSON pour Morris.js
$json_data = json_encode($data);

echo $json_data;
?>
