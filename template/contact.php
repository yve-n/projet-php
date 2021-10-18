

<section>
	<h2>Contact</h2>
			<form action="./src/bdd.inc.php" method="post" class="form-inline">
			<label for="nom">Nom</label>
			<input type="text" name="nom" id="nom" placeholder="nom" required aria-required="true" >

			<label for="prenom">Prenom</label>
			<input type="text" name="prenom" id="prenom" placeholder="prenom" required aria-required="true" >

			<label for="email">Email</label>
			<input type="email" name="email" id="email" placeholder="email" required aria-required="true">

			<label for="telephone">Telephone</label>
			<input type=phone name="telephone" id="telephone" required aria-required="true">

			<label for="ligue">Ligue</label>
			<input type="text" name="ligue" id="ligue" placeholder="ligue" required aria-required="true">

			<label for="formation">Formation</label>
			<input type="text" name="formation" id="formation" placeholder="formation" required aria-required="true">

			<label for="campus">Campus</label>
			<input type="text" name="campus" id="campus" placeholder="campus" required aria-required="true">
			
			<label for="niveau">niveau d'entrée souhaité</label>
			<input type="text" name="niveau" id="niveau" placeholder="niveau" required aria-required="true">
		
			<input type="submit" value="Envoyer">
			
		</form>
</section>

