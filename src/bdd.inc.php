<?php
$user = 'root';
$pass = '';
$port = 3306;
try {
    $db = new PDO('mysql:host=localhost;port=$port;dbname=ecole', $user, $pass, array(
        PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
    die('Erreur : '.$e->getMessage());
}

if(isset($_POST['envoyer'])){
    $ligue = $_POST['ligue'];
    $campus = $_POST['campus'];
    $niveau = $_POST['niveau'];
    $formation = $_POST['formation'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $mail = $_POST['mail'];
    $etudes = $_POST['etudes'];
    
    if (!empty($ligue) && !empty($campus) && !empty($niveau) 
        && !empty($formation && !empty($prenom) && !empty($nom) 
        && !empty($telephone) && !empty($mail) && !empty($etudes)&& isset($_POST['rdv']))) {

        $requete=$db->prepare('INSERT INTO eleves(ligue, campus, niveau, formation, 
        prenom, nom, telephone, mail, etudes) VALUES (:ligue, :campus, :niveau, :formation, :prenom,
         :nom, :telephone, :mail, :etudes)');

         $requete->bindValue(':ligue', $ligue);
         $requete->bindValue(':campus', $campus);
         $requete->bindValue(':niveau', $niveau);
         $requete->bindValue(':formation', $formation);
         $requete->bindValue(':prenom', $prenom);
         $requete->bindValue(':nom', $nom);
         $requete->bindValue(':telephone', $telephone);
         $requete->bindValue(':mail', $mail);
         $requete->bindValue(':etudes', $etudes);

         $result = $requete->execute();

         if(!$result){
            echo " Un problème est survenu, l'enregistrement n'a pas été éffectué";
         }else{
            echo '<p class="success" >votre demande a été enregistrée <br>
            Vous serez contacté par l\'organisme</p>';
         }
    }else {
        echo "tous les champs sont requis";
    }
}
?>




