<?php
$etudiants = json_decode(file_get_contents(__DIR__."/clients.json"), true);
$communes = json_decode(file_get_contents("C:/Users/mathe/Downloads/france.json"), true);
?>
<table border="1">
    <tr><th>Nom</th><th>Coordonnées GPS</th></tr>
<?php
foreach($etudiants as $e){
    $found = null;
    foreach($communes as $c){
        if(isset($c["Code_commune_INSEE"]) && $c["Code_commune_INSEE"] == $e["ville"]){
            $found = $c;
            break;
        }
    }
    if($found){
        print "<tr>";
        print "<td>".$e["nom"]."</td>";
        $gps = isset($found["coordonnees_gps"])? $found["coordonnees_gps"] : "";
        print "<td>".$gps."</td>";
        print "</tr>";
    }
}
?>
</table>




































