<?php
$contientLesDonneeDuFichier = file_get_contents(__DIR__ . "/clients.json");
$toutMesClients = json_decode($contientLesDonneeDuFichier);

echo "<table border='1'>
    <tr>
        <th>Nom</th>
        <th>Ville</th>
    </tr>";

foreach ($toutMesClients as $client) {
    echo "<tr>
            <td>{$client->nom}</td>
            <td>{$client->ville}</td>
          </tr>";
}

echo "</table>";
?>
