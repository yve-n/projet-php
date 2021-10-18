<?php
try{
$bdd=new PDO('mysql:host=localhost; dbname=ecole; charset=utf8','root','');
}
catch(Exception $e) {
    die('Ereur vous concernant: '.$e->getMessage());
}
?>

  <?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $ligue = $_POST['ligue'];
    $formation = $_POST['formation'];
    $campus = $_POST['campus'];
    $niveau = $_POST['niveau'];
    
    
    $requete=$bdd->prepare('SELECT * FROM etudiant where email = ?');
    $requete->execute(array($email));
    if (!$resultat = $requete->fetch()){
  
    $requete2=$bdd->prepare('INSERT INTO etudiant (nom, prenom, email, telephone, ligue, formation, campus, niveau) 
    VALUES (:nom, :prenom, :email, :telephone, :ligue, :formation, :campus, :niveau)');

    $array = array(
      'nom' => $nom,
      'prenom' => $prenom,
      'email' => $email,
      'telephone' => $telephone,
      'ligue' => $ligue,
      'formation' => $formation,
      'campus' => $campus,
      'niveau' => $niveau
    );
    $requete2->execute($array);

    echo '<script language="Javascript">
    document.location.replace("/template/data.html");
    </script>';

    }
    else {
      echo '<script language="Javascript">
      document.location.replace("/template/index.html");
      </script>';
      }
  ?>