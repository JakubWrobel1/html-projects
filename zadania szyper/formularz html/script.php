<?php
		// sprawdzamy, czy formularz został wysłany
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			// pobieramy wartość pola imienia
			$name = $_POST["name1"];

			// wyświetlamy komunikat powitalny
			echo "Witaj, ".$name."!";
		}
?>