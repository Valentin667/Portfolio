<?php
// établir une connexion à la base de données
include("connexion.php");
$requete = "SELECT * FROM projet WHERE id_projet={$_GET["id"]}";
$stmt = $db->query($requete);
$resultat = $stmt->fetchall(PDO::FETCH_ASSOC);

// récupérer l'ID du projet actuel
$projet = $_POST['id_projet'];

// sélectionner le prochain projet de la base de données en utilisant l'ID du projet actuel
$result = mysqli_query($conn, "SELECT * FROM projet WHERE id_projet > '$projet' ORDER BY id");