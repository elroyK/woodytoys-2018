<html>
	<head>
		<title>WoodyToys</title>
	</head>
	<body>
		<h1>b2b.woodytoys.be</h1>
		<p>Ceci est le site commercial de WoodyToys</p>
		<p>Produits (Intégration DB)</p>
		<?php 
			
			$servername = "172.17.0.6";
			$username = "chris";
			$password = "wtadmin2018";
			$db = "produits";
			
						
			// Create connection

			$conn = new mysqli($servername, $username, $password, $db);
			// Check connection 
			
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error); 
			}

			$sql = "SELECT * FROM jouets";
			$results = $conn->query($sql);

			echo("<table><tr><th>ID</th><th>Nom</th><th>Prix (euros)</th></tr>");

			if($results->num_rows > 0) {
				while($row = $results->fetch_assoc()) {
					echo("<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['price']."</td></tr>");
				}
			}	
			else {
				echo("<tr><td></td><td>Pas de produits</td><td></td></tr>");
			}

			echo("</table>");

		?>
	</body>
</html>
