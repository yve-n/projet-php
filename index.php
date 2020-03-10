 
<?php 
  include_once("./public/static.inc.php");
?>

<!DOCTYPE HTML>
<html lang="<?php print lang ?>">
<?php include_once("./src/head.inc.php");?>
<body>

	<?php include_once("./src/nav.inc.php");?>
	<main>
		<h1><?php print titre ?></h1>
			<?php
				if(isset($_GET['page'])){
				//variable pour $_GET
				$root = $_GET['page'];
						if($root==1){
							include_once("./template/index.html");
						}
						if($root==2){
							include_once("./template/portfolio.html");
						}
						if($root==3){
							include_once("./template/contact.php");
						}
						else if($root>3 || $root==0){
							echo '<p class="warning"><i class="far fa-frown"></i> La page demandée n\'existe pas!!</p>';
							//header("HTTP/1.0 404 Not Found");
						}

				}
					else{
						include("./template/index.html");
					}

			?>
	</main>
	<?php include_once("./src/footer.inc.php");?>
</body>
</html>