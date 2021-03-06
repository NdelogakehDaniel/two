<?php
session_start();
if(!isset($_SESSION['id'])){
	header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <title>OUTILS AUTO_DIAGNOSTIC</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/vuetify.min.css">
<link rel="stylesheet" type="text/css" href="css/commonstyle1.css">

</head>
<body>
<!--entete sur toutes les pages-->
<h1>  Autodiagnostic selon la norme ISO 27001: 2013</h1>
<hr>
<!--entete sur toutes les pages-->


<!--navbar-->

<?php
include('navbar.php');
?>

<!-- end of navbar -->
<script src="js/vue.js"></script>
<script src="js/vuetify.js"></script>
<script>
    new Vue({
      el: '#nav-bar',
      vuetify: new Vuetify(),
    })
</script>


<!--etiquette des exigences-->
<script type="text/JavaScript" src="js/jspdf.min.js"></script>
<script type="text/JavaScript" src="js/jquery.min.js"></script>
<script type="text/JavaScript" src="js/jspdf.min.js"></script>
<script type="text/JavaScript" src="js/html2pdf.bundle.min.js"></script>
<b>
<div  class="red"; style="background-color:wheat"  id="print1">
	<div class="col-md">
		<hr>
		<h1 style="width: 100%; text-align: center;">
			<a class="btn btn-primary btn-lg btn-block"; style="background-color:#0cc364; text-transform: uppercase;" > <b>Liste des Exigences</b> </a>
		</h1>
		<table class="table table-hover" style="font-size: 15px" border="4" cellspacing=4>
			<thead>
				<th>Nom</th>
				<th>Evaluation </th>
				<th>Taux</th>
				<th>justifications ou commentaires</th>
				<th></th>
			</thead>
			<tbody>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art7: Support </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								20.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/10" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">7.1: Ressources </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/43" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr43: L???organisation a d??termin?? et fourni les ressources requises pour l?????tablissement, la mise en ??uvre, la tenue et l???am??lioration continue du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/11" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">7.2:Comp??tences </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								15.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/44" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr44: Les comp??tences n??cessaires des personnes dont le travail a une incidence sur les performances du SI sont d??termin??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/45" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr45: Les comp??tences du personnel sont ??valu??es sur la base d&#x27;une formation ou d&#x27;une exp??rience appropri??e </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/46" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr46: L&#x27;organisme met en place et ??value l&#x27;efficacit?? des actions pour acqu??rir ou renforcer les comp??tences n??cessaires au bon fonctionnement du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/47" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr47: Les informations document??es sur les comp??tences du personnel sont conserv??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/12" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">7.3: Sensibilisation </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								20.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/48" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr48 </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/49" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr49: L&#x27;organisme s&#x27;assure que le personnel est conscient de sa contribution ?? l&#x27;efficacit?? du SMSI ainsi qu&#x27;aux effets positifs d&#x27;une am??lioration des performances de la s??curit?? de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/50" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr50: Le personnel est conscient des implications de toute non-conformit?? aux exigences requises par le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/13" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">7.4:Communication </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/51" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr51: La pertinence des besoins de communication interne est d??termin??e </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/52" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr52: La pertinence des besoins de communication externe est d??termin??e </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/53" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr53: Les modalit??s de communication interne sont d??termin??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/54" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr54: Les modalit??s de communication externe sont d??termin??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/14" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">7.5: Informations document??es </td>
							<td>
								
								Insuffisant
								
							</td>
							<td>
								
								8.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/55" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr55: Les informations document??es du SMSI comprennent celles exig??es par l&#x27;ISO 27001 et celles n??cessaires ?? son efficacit?? </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/56" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr56: Toute information document??e est identifi??e, d??crite et approuv??e de mani??re compr??hensible dans un format et sur un support accessible </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/57" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr57: Le contenu des informations document??es est revu p??riodiquement en termes de pertinence et d&#x27;ad??quation ?? l&#x27;usage </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/58" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr58:  Les informations document??es sont utiles, utilisables et utilis??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/59" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr59:  Les modifications des informations document??es sont maitris??es (contr??le des versions par exemple) </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/60" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr60: La gestion des informations document??es est bien ma??tris??e en termes de distribution, acc??s, stockage, protection, conservation et ??limination </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/61" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr61: Les informations document??es externes sont identifi??es et maitris??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art8: Fonctionnement </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								34.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/15" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">8.1: Planification et contr??le op??rationnels </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								24.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/62" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr62: Les processus n??cessaires ?? la satisfaction des exigences li??s ?? la s??curit?? de l&#x27;information sont planifi??s, mis en ??uvre et ma??tris??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/63" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr63: Des plans pour atteindre les objectifs de s??curit?? de l&#x27;information d??finis en 6.2 sont mis en ??uvre </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/64" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr64: Les informations document??es sont conserv??es pour avoir l&#x27;assurance que les processus ont ??t?? suivis comme pr??vu </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/65" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr65: L&#x27;organisation doit contr??ler les modifications pr??vues, analyser les cons??quences des modifications impr??vues et, si n??cessaire, mener des actions pour limiter tout effet n??gatif </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/66" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr66: Les processus externalis??s sont ma??tris??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/16" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">8.2: Appr??ciation des risques de s??curit?? de l&#x27;information </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/67" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr67: Des appr??ciations de risques de s??curit?? de l&#x27;information ?? des intervalles planifi??s, quand des changements significatifs sont pr??vus ou ont lieu sont r??alis??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/68" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr68:Les informations document??es sur les r??sultats du traitement des risques de s??curit?? de l&#x27;information sont conserv??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/17" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">8.3: Traitement des risques de s??curit?? de l&#x27;information </td>
							<td>
								
								Convaincant
								
							</td>
							<td>
								
								50.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/69" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr69: Le plan de traitement des risques de s??curit?? de l&#x27;information est mis en ??uvre </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/70" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr70: Les informations document??es sur les r??sultats de traitement des risques de s??curit?? de l&#x27;information sont conserv??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art9 ??valuation des performances </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								33.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/18" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">9.1: Surveillance, mesure, analyse et ??valuation </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/71" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr71: Les performances de s??curit?? de l&#x27;information ainsi que l&#x27;efficacit?? du SMSI sont ??valu??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/72" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr72: Ce qui est n??cessaire de surveiller et de mesurer est d??termin?? </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/73" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr73: Les m??thodes de surveillance, de mesurage, d&#x27;analyse et d&#x27;??valuation, pour assurer la validit?? des r??sultats sont d??termin??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/74" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr74: L&#x27;organisme d??termine quand la surveillance et les mesures doivent ??tre effectu??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/75" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr75: L&#x27;organisme d??termine qui doit effectuer la surveillance et les mesures </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/76" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr76: L&#x27;organisme d??termine quand les r??sulats de la surveillance et des mesures doivent-??tre analys??es et ??valu??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/77" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr77: L&#x27;organisme d??termine qui doit analyser et ??valuer les r??sultats </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/78" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr78: Les informations document??es appropri??es comme preuves des r??sultats de la surveillance et des mesures sont conserv??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/19" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">9.2: Audit interne </td>
							<td>
								
								Convaincant
								
							</td>
							<td>
								
								70.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/79" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr79: Les audits internes sont planifi??s, ??tablis et mis en ??uvre ?? des intervalles d??termin??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/80" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr80: Les crit??res et le p??rim??tre de chaque audit sont d??finis </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/81" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr81: Les auditeurs sont s??lectionn??s en s&#x27;assurant de l&#x27;objectivit?? et de l&#x27;impartialit?? du processus d&#x27;audit. </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/82" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr82: Les r??sultats des audits sont communiqu??s ?? la direction concern??e </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="80.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/83" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr83: Des informations document??es sont conserv??es comme preuves de la mise en ??uvre du programme d&#x27;audit et  de ses r??sultats. </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/20" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">9.3: Revue de direction </td>
							<td>
								
								Insuffisant
								
							</td>
							<td>
								
								0.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/86" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr86: La revue de direction prend en compte les modifications des enjeux externes et internes pertinents pour le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/84" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr84: La revue du SMSI est r??alis??e ?? des intervalles planifi??s pour s&#x27;assurer de son efficacit?? et ad??quation avec la strat??gie de l&#x27;organisme </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/85" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr85: La revue de direction prend en compte l&#x27;??tat d&#x27;avancement des actions d??cid??es ?? l&#x27;issue des revues de direction pr??c??dentes </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/87" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr87: La revue de direction prend en compte les retours sur les performances de s??curit?? de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/88" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr88: La revue de direction prend en compte les retours d&#x27;informations des parties int??ress??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/90" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr90: La revue de direction prend en compte les opportunit??s d&#x27;am??lioration continue </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/89" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr89: La revue de direction prend en compte les r??sultats de l&#x27;appr??ciation des risques et l&#x27;??tat d&#x27;avancement du plan de traitement des risques </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/91" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr91: La revue de direction fournit des d??cisions et actions sur les opportunit??s d???am??lioration, le besoin de modifier le SMSI et le besoin en ressources </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/92" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr92: Les ??l??ments de sortie des revues de direction sont conserv??s sous forme d&#x27;informations document??es. </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art 10: Am??lioration </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/21" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">10.1: Non-conformit?? et action corrective </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/93" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr 93: L???organisme r??agit ?? chaque non-conformit?? pour la corriger, la ma??triser et prendre en charge les cons??quences </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/94" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr94: L???organisme ??value la n??cessit?? de traiter les causes des non-conformit??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/95" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr95: L???organisme met en ??uvre toutes les actions correctives requises </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/96" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr96: L&#x27;organisation r??vise l&#x27;efficacit?? de toute action corrective mise en ??uvre </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/97" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr97: L&#x27;organisme modifie, si n??cessaire, le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/98" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr98: Les actions correctives sont ?? la mesure des effets des non-conformit??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/99" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr99: L&#x27;organisation doit conserver des informations document??es comme preuves de la nature des non-conformit??s et de toute action subs??quente et des r??sultats de toute action corrective </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/22" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">10.2:  Am??lioration continue </td>
							<td>
								
								Conforme
								
							</td>
							<td>
								
								95.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/100" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr100 L???organisme s???engage ?? am??liorer en continu la pertinence, l&#x27;ad??quation et la performance du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai" selected>Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="95.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art 4: Contexte de l&#x27;organisme </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								23.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">4.2: Compr??hension des besoins et des attentes des parties int??ress??es </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr4: Les parties int??ress??es pertinentes sont identifi??es dans la cadre du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr5: Les exigences  des parties int??ress??es ainsi que celles l??gales et r??glementaires sont prises en consid??ration dans le SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">4.3: D??termination du domaine d&#x27;application du syst??me de management de la s??curit?? de l&#x27;information </td>
							<td>
								
								Faux
								
							</td>
							<td>
								
								32.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr6: Le domaine d&#x27;application du SMSI est ??tabli en d??terminant ses limites et son applicabilit?? </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr7: Le domaine d&#x27;application du SMSI prend en compte les enjeux externes et internes auquel il est fait r??f??rence en 4.1 </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr8: Le domaine d&#x27;application du SMSI prend en compte les exigences auquel il est fait r??f??rence en 4.1 et 4.2 </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr9: Le domaine d&#x27;application du SMSI prend en compte les interfaces et les d??pendances existantes entre les activit??s r??alis??es par l&#x27;organisation et celles r??alis??es par d&#x27;autres organisations </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/10" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr10: Le domaine d&#x27;application doit ??tre disponible sous forme d&#x27;information document??e </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/4" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">4.4: Syst??me de Management de la S??curit?? de l&#x27;Information </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								30.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/11" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr11: Le SMSI est ??tabli, mis en oeuvre, tenu ?? jour et am??lior?? en continu </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">4.1: Compr??hension de l&#x27;organisme et de son contexte </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								0.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr2: Les informations relatives aux enjeux externes et internes sont surveill??es et revues p??riodiquement </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr3: Les facteurs d&#x27;influence sur l&#x27;efficacit?? du Syst??me de Management de la S??curit?? de l&#x27;Information (SMSI) sont identifi??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/1" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr1: Les??enjeux??internes et??externes??sont d??termin??s relativement ?? la finalit?? et??l&#x27;orientation strat??gique de l&#x27;organisme </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/2" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art 5: Leadership </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								40.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/6" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">5.2: Politique </td>
							<td>
								
								Convaincant
								
							</td>
							<td>
								
								60.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/16" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr16: La politique de s??curit?? de l&#x27;information est adapt??e ?? la mission de l&#x27;organisme en incluant des objectifs de s??curit?? de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/17" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr17: La direction am??liore sa politique de s??curit?? de l&#x27;information en satisfaisant les exigences relatives ?? la s??curit?? de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/18" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr18: La politique de s??curit?? de l&#x27;information est disponible et tenue ?? jour sous forme d&#x27;une information document??e </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/19" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr19: La politique de s??curit?? de l&#x27;information est communiqu??e au sein de l&#x27;organisme </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/20" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr20: La politique de s??curit?? de l&#x27;information est mise ?? la disposition des parties int??ress??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/7" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">5.3: R??les, responsabilit??s et autorit??s au sein de l&#x27;organisme </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								20.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/21" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr21: La direction s&#x27;assure que les responsabilit??s et les r??les au sein du SMSI sont attribu??s et communiqu??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/22" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr22: Les responsabilit??s et autorit??s s&#x27;assurant que le SMSI est conforme ?? la norme ISO 27001 sont d??sign??es par la direction </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/23" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr23: Les responsabilit??s et autorit??s ??valuent et reportent ?? la direction les performances du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/5" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">5.1: Leadership et engagement </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								40.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/13" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr 13: La direction assure que les ressources n??cessaires pour le bon fonctionnement du SMSI sont disponibles et que celui-ci produit les r??sultats escompt??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/14" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr 14: La direction communique sur l&#x27;importance de disposer d&#x27;un SMSI efficace et de son am??lioration continue </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/15" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr 15: La direction  oriente et soutient toutes les personnes pouvant contribuer ?? l&#x27;efficacit?? du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/12" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr12: La direction assume la responsabilit?? de la politique et des objectifs  du SMSI, son int??gration avec les processus m??tier et l&#x27;information n??cessaire ?? la bonne implication du personnel </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/3" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">Art6: Planification </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								38.75
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/9" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">6.2: Objectifs s??curit?? et planification pour les atteindre </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								32.0
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/38" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr38: Des objectifs de s??curit?? de l&#x27;information sont ??tablis aux fonctions, niveaux et processus n??cessaires au bon fonctionnement du SMSI </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/39" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr39: Les objectifs de s??curit?? de l&#x27;information sont pertinents, mesurables et coh??rents avec la politique s??curit?? de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai" selected>Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="95.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/40" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr40: Les objectifs de s??curit?? de l&#x27;information sont surveill??s, tenus ?? jour et communiqu??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/41" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr41: Les informations document??es sur les objectifs qualit?? sont tenues ?? jour </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/42" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr42: Pour atteindre les objectifs de s??curit?? de l&#x27;information, l&#x27;organisme d??termine le responsable, les actions, les ressources, les ??ch??ances et les modalit??s d&#x27;??valuation des r??sultats </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/8" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">6.1: Actions li??es aux risques et opportunit??s </td>
							<td>
								
								Informel
								
							</td>
							<td>
								
								45.5
								

							</td>

							<td>
								
								
								
							</td>

							
							<td></td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/25" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr25: L&#x27;organisme planifie et met en oeuvre les actions face aux risques et opportunit??s s??lectionn??s </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/26" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr26: La mani??re d&#x27;int??grer et de mettre en ??uvre les actions au sein du SMSI est planifi??e </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/27" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr27: L&#x27;??valuation de l&#x27;efficacit?? de ces actions au sein des processus du SMSI est planifi??e </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/28" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr28: Un processus d&#x27;application des risques relatifs ?? la s??curit?? de l&#x27;information a ??t?? ??tabli incluant des crit??res d&#x27;acceptation et d&#x27;appr??ciation des risques </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai" selected>Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="95.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/29" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr29: Le processus d&#x27;application des risques s&#x27;assure que la r??p??tition des appr??ciations des risques produits des r??sultats coh??rents </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/30" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr30: Le processus d&#x27;application des risques identifie et analyse les risques de s??curit?? de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/31" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr31: L&#x27;organisation conserve les informations document??es sur le processus d&#x27;appr??ciation des risques de s??curit?? de l&#x27;information </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/32" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr32: L&#x27;organisation a d??fini et appliqu?? un processus de traitement des risques de s??curit?? de l&#x27;information en d??terminant et comparant les mesures mises en ??uvre avec l&#x27;annexe A </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/33" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr33: L&#x27;organisme a produit une d??claration d&#x27;applicabilit?? pour justifier les exclusions et inclusions ?? l&#x27;annexe A </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/34" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr34: Un plan de traitement des risques relatifs ?? la s??curit?? de a ??t?? cr???? </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/35" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr35: Les propri??taires des risques ont revu et approuv?? le plan </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai" selected>Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="70.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/36" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr36: Les risques r??siduels relatifs ?? la s??curit?? de l&#x27;information ont ??t?? autoris??s par les propri??taires des risques </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux" selected>Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="0.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/37" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr37: Les informations document??s sur le processus de traitement des risques de l&#x27;information sont conserv??es </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux" selected>Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai">Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="30.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
					<tr>
						<form action="http://outil-autodiagnostic.herokuapp.com/Exigences/Exigences/24" method="post">
							<input type="hidden" name="csrfmiddlewaretoken" value="3Eu4eSgYEGADx8zv5aKwMv5DsM49h1gk1gVfKhabFtpq4ESBRcYKa5ajDD9bhw5h">
							<td class="w-50">cr24: Les risques et opportunit??s sont pris en compte pour am??liorer la performance du SMSI en lien avec les enjeux ?? relever et les exigences ?? satisfaire </td>
							<td>
								
								<select name="evaluation" class="form-control">
									
										
											<option value="Faux">Faux</option>
										
									
										
											<option value="Plutot Faux">Plutot Faux</option>
										
									
										
											<option value="Plutot Vrai">Plutot Vrai</option>
										
									
										
											<option value="Vrai" selected>Vrai</option>
										
									
								</select>
								
							</td>
							<td>
								
									<input name="taux"  value="92.0" class="form-control">
								

							</td>

							<td>
								
									<input name="preuve" value="aucune" class="form-control">
								
							</td>

							
							<td>
								<button type="submit" name="print_btn" class="btn btn-outline-primary">Enregistrer</button>
							</td>
							

						</form>
					</tr>
				
			</tbody>
		</table>
	</div>
</div>
</b>
<!--etiquette des exigences-->
<div class="lightblue">
	<div class="col-md">

		<h2>
			<a class="btn btn-outline-info  btn-sm btn-block"; style="background-color:red " > <b>DATE DU DERNIER AUDIT SUR LES EXIGENCES
				<SCRIPT language="JavaScript">

	var
	derniereModif=document.lastModified;

	var dateModif = new
	Date(derniereModif);
	var jour = dateModif.getDate();
	var mois=dateModif.getMonth();
	var annee=dateModif.getFullYear();
	var
	heures=dateModif.getHours();
	var
	minutes=dateModif.getMinutes();

	document.write(" : ");
	document.write(jour+"/"+mois+"/"+ annee +" ?? "+ heures +":"+minutes);

</SCRIPT>
	</b></a>
		</h2>

		</div>
</div>

</div>

<div id="print-btn1"></div>
<button onclick="savePDF()" type="submit" name="print_btn" class="btn btn-outline-primary">TELECHARGER LES DONNEES DE L'AUDIT</button>

<script  language="JavaScript">

function savePDF() {
var element = document.getElementById ("print1")
html2pdf(element);

};
</script>



<hr>
<footer>
<?php
	include('footer.php');
?>
</footer>

<script src="../../../cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>
</html>
