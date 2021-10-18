<?php
try{
$bdd=new PDO('mysql:host=sql105.byethost10.com; dbname=b10_30095402_ecole; charset=utf8','b10_30095402','yvecarelle98');
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