
<section>
	<h2>Contact</h2>
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form-inline">
			
			<label for="cursus">Cursus</label>
			<input type="text" name="cursus" id="cursus" placeholder="cursus" required aria-required="true" autofocus="true" autofocus>

			<label for="campus">Campus</label>
			<input type="text" name="campus" id="campus" placeholder="campus" required aria-required="true">
			
			<label for="niveau">niveau d'entrée souhaité</label>
			<input type="text" name="niveau" id="niveau" placeholder="niveau" required aria-required="true">

			<label for="formation">Formation</label>
			<input type="text" name="formation" id="formation" placeholder="formation" required aria-required="true">
			
			<label for="prenom">Prenom</label>
			<input type="text" name="prenom" id="prenom" placeholder="prenom" required aria-required="true" >

			<label for="nom">Nom</label>
			<input type="text" name="nom" id="nom" placeholder="nom" required aria-required="true" >
			
			<label for="phone">Telephone</label>
			<input type=phone name="phone" id="phone" required aria-required="true">

			<label for="mail">Email</label>
			<input type="email" name="mail" id="mail" placeholder="mail" required aria-required="true">
            
			<label for="etudes">Niveau d'études actuel</label>
			<input type="text" name="etudes" id="etudes" placeholder= "niveau d'études actuel" required aria-required="true">
			
			<label  for="rdv" class="container">Je souhaite prendre un RDV d'admission(en option)</label>
			<input type="checkbox" checked="checked" id="rdv" name="rdv">

			<label  for="rdv" class="container">Je souhaite recevoir une brochure par courier(en option)</label>
			<input type="checkbox" checked="checked" id="rdv" name="rdv">

			<label  for="rdv" class="container"><small>Dans le cadre de <u>la reglementation sur la protection des données.</u>
                 J'accepte d'etre contacté(e) par mail et téléhone.
			</small></label>
			<input type="checkbox" checked="checked" id="rdv" name="rdv" >
		
			<input type="submit" value="Envoyer">
			
		</form>
</section>
<?php 
//connection à la base
try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=eleves', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    
	}
	catch(Exception $e) {
		die('Ereur vous concernant: '.$e->getMessage());
	}
	if(((!empty($_POST['cursus'])) && (!empty($_POST['campus'])) 
	&&(!empty($_POST['niveau'])) && (!empty($_POST['formation']))
	&& (!empty($_POST['prenom']))&& (!empty($_POST['nom']))
	&& (!empty($_POST['mail']))&& (!empty($_POST['etudes']))) && (isset($_POST['phone']) &&(isset($_POST['rdv'])) )) {
        $cursus=$_POST['cursus'];
		$campus=$_POST['campus'];
		$niveau=$_POST['niveau'];
		$formation=$_POST['formation'];
		$prenom=$_POST['prenom'];
		$nom=$_POST['nom'];
		$mail=$_POST['mail'];
		$etudes=$_POST['etudes'];
		$phone=$_POST['phone'];

	if (isset($_POST['mail']))
{
    $_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail'])) {
        // if (preg_match("/([^A-Za-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-])/", $_POST['nom'])) {
        //     if (preg_match("/([^A-Za-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-])/", $_POST['prenom'])) {
        //         if (preg_match("/([^A-Za-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-])/", $_POST['cursus'])) {
        //             if (preg_match("/([^A-Za-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-])/", $_POST['campus'])) {
        //                 if (preg_match("/([^A-Za-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-])/", $_POST['etudes'])) {
					 echo 'L\'adresse ' . $_POST['mail'] . ' est <strong>valide</strong> !';

                             
                        } else {
                            echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
                        }
                        
                       //inserer les valeurs dans la table
							$req=$bdd->prepare('INSERT INTO eleves(cursus, campus, niveau, formation, prenom, nom, telephone, mail, etudes)
							VALUES(?,?,?,?,?,?,?,?,?)');
						   $req->execute(array($cursus,$campus,$niveau,$formation,$prenom,$nom,$phone,$mail,$etudes));
						   print '<p class="success" >votre demande a été enregistrée </p>';

                        
                    // }
                // }
//             }
//         }
//     }
 }


}
?>