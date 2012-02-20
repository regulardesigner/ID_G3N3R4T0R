<?php
include_once 'inc/functions.php';
#
$title = "ID_G3N3R4T0R";
#
$FirstNameM = theArrayRandomiser($fakeFirstNameMale);
$secondNameM = theArrayRandomiser($fakeFirstNameMale);
$FirstNameF = theArrayRandomiser($fakeFirstNameFemale);
$secondNameF = theArrayRandomiser($fakeFirstNameFemale);
$familly = theArrayRandomiser($fakeFamillyName);
#
#
include_once 'inc/header.php';?>

<div class="page">
	<section>
		<h1>G&eacute;n&eacute;rateur de fausses d&#x27;identit&eacute;es</h1>
		<p><strong>Votre ID masculin est : </strong><?php echo $FirstNameM."-".$secondNameM." ".$familly; ?></p>
		<p><strong>Votre ID f&eacute;minin est : </strong><?php echo $FirstNameF."-".$secondNameF." ".$familly; ?></p>
		<p> This is your email adress : <?php echo $FirstNameF."-".$secondNameF."-".$familly."@mailinator.com"; ?><p>
		<small>Nombre d&#x27;ID masculin possible du g&eacute;n&eacute;rateur : <?php echo possibilities($fakeFirstNameMale,$fakeFamillyName); ?></small>
		<br />
		<small>Nombre d&#x27;ID feminin possible du g&eacute;n&eacute;rateur : <?php echo possibilities($fakeFirstNameFemale,$fakeFamillyName); ?></small>
	</section>
</div>

<?php include_once 'inc/footer.php'; ?>