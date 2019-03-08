<?php

	function download_json($src, $dist) {
		$base_path = "http://asepxiacms.circus.technology/";
		copy($base_path.$src.".json", "./app/data/".$dist.".json");
		echo("<li>".$src." descargado correctamente</li>");
	}

	function download_image($src, $folder, $name) {
		$base_path = "http://asepxiacms.circus.technology";
		$dist = "./dist/img/";
		$info = pathinfo($src);
		$dist_path = $dist.$folder;
		if (!file_exists($dist_path)) {
			mkdir($dist_path, 0777, true);
		}
		copy($base_path.$src, $dist_path.$name.".".$info['extension']);
	}

	function download_assets($country) {
		$json = json_decode(file_get_contents("./app/data/".$country.".json"), true);
		foreach ( $json["products"] as $node ) {
			if(isset($node["cover"]['from'])) {
				download_image($node["cover"]['from'], "/products/", $node["id"]);
			}
			if(isset($node["cover_mobile"]['from'])) {
				download_image($node["cover_mobile"]['from'], "/products/", $node["id"]."-mobile");
			}
			if(isset($node["thumbnail"]['from'])) {
				download_image($node["thumbnail"]['from'], "/products/", $node["id"]."-thumbnail");
			}
		}

		foreach ($json["sliders"] as $node) {
			if(isset($node["image"]['from'])) {
				download_image($node["image"]['from'], "sliders/", $node["id"]);
			}
			if(isset($node["mobile"]['from'])) {
				download_image($node["mobile"]['from'], "sliders/", $node["id"]."-mobile");
			}
		}

		foreach ($json["advices"] as $node) {
			if(isset($node["icon"]['from'])) {
				$name = $string = $node["key_url"];
				download_image($node["icon"]['from'], "advices/", $name);
			}
		}

		foreach ($json["etailers"] as $node) {
			if(isset($node["logo"]['from'])) {
				$name = $string = $node["id"];
				download_image($node["logo"]['from'], "etailers/", $name);
			}
		}
		echo("<p>Assets de ".$country." descargados coorectamente.</p>");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualización de data</title>
</head>
<body>
<ul>
	<h2>Descarga de jsons & imagenes con copy php</h2>
	<?php
		/* descarga de index de países */
		download_json("countries", "countries");
		/* descarga de contenido por país */
		$countries = json_decode(file_get_contents("./app/data/countries.json"), true);
		// foreach ( $countries as $country ) {
		// 	download_json("country/".$country["id"], $country["id"]);
		// 	/* download the assets per country */
		// 	download_assets($country["id"]);
		// }
		download_json("country/CO", "CO");
		download_assets("CO");
	?>
</ul>
</body>
</html>
