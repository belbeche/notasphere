<?php 
include ('header.php');
include ('menu.php');
?>
<div class="jumbotron">
    <h1>VENTE - APPARTEMENT - MAISON/VIAGER</h1>
    <p class="lead">Application officiel - Notaire de France</p>
    <p><a class="btn btn-lg btn-success" href="#" role="button">Cliquez pour télécharger</a></p>
</div>

<br/><hr>

<h3>Que voulez vous faire ? </h3>
	<form action="" method="POST">
		<select class="form-control" >
		  <option value="">L'étude et ces avantages</option>
		  <option selected>Immobilier</option>
		  <input type="submit" value="Go" class="btn">
		</select>
	</form>
	
<?php 
/*immoCOM*/
$immo = 'VENTE - APPARTEMENT - MAISON/VIAGER';
?>
	<aside class="annonce">
		<form action="choix_biens" method="POST">
			vente : <input type="image" name="vente" placeholder="vente"/>
			appartement : <input type="image" name="appartement" placeholder="appartement"/>
			maison : <input type="image" name="maison" placeholder="maison"/>
		</form>
	</aside>


<?php
$choix = ['Vente','Appartement','Maison/viager'];
$choix_util = '';
echo $immo;
var_dump($choix);

if ($choix == $choix_util) {
	echo $choix_util;
}

?>