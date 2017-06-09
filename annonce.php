<?php 
/*immoCOM*/
$immo = 'VENTE - APPARTEMENT - MAISON/VIAGER';
?>
<div class="annonce">
	<aside>
		<form action="" method="POST">
			<input type="text" name="vente" placeholder="vente">
			<input type="text" name="appartement" placeholder="appartement">
			<input type="text" name="maison" placeholder="maison">
		</form>
	</aside>
</div>

<?php
$choix = ['Vente','Appartement','Maison/viager'];
$choix_util = '';
echo $immo;
var_dump($choix);

if ($choix == $choix_util) {
	echo $choix_util;
}

?>