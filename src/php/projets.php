<?php
header("Access-Control-Allow-Origin: *");

try {

    $bdd = new PDO('mysql:host=localhost;dbname=portfolio', 'root', 'L0Z8E9kF');
    
    $req = $bdd->query('SELECT * from projets');
    $projects = $req->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($projects);

} catch (PDOException $e) {

    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();

}
?>
