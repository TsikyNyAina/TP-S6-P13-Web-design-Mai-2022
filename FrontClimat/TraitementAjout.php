
<?php

include('function.php');

if (isset($_POST['dateActus']) && isset($_POST['categorie']) && isset($_POST['titre']) && isset($_POST['resume']) && isset($_POST['contenu']) && isset($_POST['id'])) {
    $id= $_POST['id'];
    $dateActus = $_POST['dateActus'];
    $categorie = $_POST['categorie'];
    $titre = $_POST['titre'];
    $resume = $_POST['resume'];
    $contenu = $_POST['contenu'];

    $url = toSlug($titre)."-".$id;

    //var_dump($url);

    insertActu($id,$dateActus, $categorie, $titre, $resume, $contenu,$url);
    //var_dump($dateActus);
    header('Location: Liste-Actus.php');
}

?>


