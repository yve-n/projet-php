

<?php include_once("./src/bdd.inc.php");?>
<section>
	<h2>Contact</h2>
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form-inline">
			<label for="ligue">Ligue</label>
			<input type="text" name="ligue" id="ligue" placeholder="ligue" required aria-required="true" autofocus="true" autofocus>

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

			<label for="telephone">Telephone</label>
			<input type=phone name="telephone" id="telephone" required aria-required="true">

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

