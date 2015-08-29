<html>
	<head>
		<title> Exercice a </title>
	</head>
	<body>
		<p> Bonojur a tous2sss !! </p>
		<?php
		    $nom = "martin";
			$prenom = "pierre";
			//echo "<br />";
			echo "je suis un script php et mon nom et prenom est: ";
			echo $nom;
			echo " ";
			echo $prenom;
			echo "           _ ";
			
			// essai concaténation			
			echo "Avec concatenation: ";
			$var = $nom;//"Ceci est une chaine de caractères";
			$var = $var . " ";//" avec encore un peu plus de texte";
			$var = $var . $prenom;
			$var .= " et un newline a la fin ... \n\n";
			echo "le message : $var\"";
            echo "FIN";
 

			echo "<hr />";
			echo "ce n'est pas si compliqué ...";
			echo "<hr />";
		?>
	</body>
</html>