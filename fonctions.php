<?php

function connexion($nomBase)
{
    $nomServeur = "";
    $username = "";
    $password = "";
    $options = array(
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //active la gestion des erreurs sous la forme d'exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //les données seront récupérées sous la forme de tableaux associatifs
    );
    $dsn = "mysql:host=$nomServeur;dbname=$nomBase";
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        return array('succes' => true, 'connection' => $connection);
    } catch (PDOException $e) {
        return array('succes' => false, 'erreur' => $e->getMessage());
    }
}

function affichageManga()
{
    $connexion = connexion('projetmanga');
    if ($connexion['succes'] == TRUE) {
        $pdo =  $connexion['connection'];
        $mangas = $pdo->prepare("SELECT imageURL FROM oeuvre WHERE support LIKE 'Manga' ORDER BY titre");
        $mangas->execute();
        $listeMangas = $mangas->fetchAll();
        foreach ($listeMangas as $manga) {
            echo '<img class="illustration" src="' . $manga['imageURL'] . '">';
        }
    } else {
        echo $connexion['erreur'];
    }
}
