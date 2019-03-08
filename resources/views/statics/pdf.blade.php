<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	    <title>Tu Asepxia Ideal</title>
	</head>
	<style>
	body {
		padding: 0;
		margin: 0;
		text-align: center;
		font-family: 'Helvetica', 'Arial', sans-serif;
	}
	a {
		color: #000;
		text-transform: uppercase;
		text-decoration: none;
	}
	</style>
<body>
<img src="https://asepxia.com/co/dist/img/logo-asepxia.png" alt="Asepxia" width="100">
<h1 style="width:100%; text-align: center; color: #E45D5E; border-bottom: 20px solid #E45D5E;">TU ASEPXIA IDEAL</h1>
<hr style="background-color: #E45D5E;">
{{-- <h2 style="width:100%; text-align: left; color: #34D0D0; display: block;">TIENES UNA PIEL <?php if(isset($sensible)) { echo("SENSIBLE "); }; ?>TIPO 3</h2>

<table cellspacing="0" style="width: 100%; border: solid 1px #f1f1f1; background: #ffffff; font-size: 12px;">
	<tr style="width: 100%;">
		<th style=" font-weight: lighter; padding-bottom: 5px;">Tu piel es sensible y tiende a enrojecerse o irritarse. Además, es mixta con inclinación a grasosa. Sientes la piel de tus cachetes cómoda pero tu frente, nariz y pera muy grasosa y brillosa.</th>
	</tr>
	<tr style="width: 100%;">
		<th style=" font-weight: lighter; padding-bottom: 5px;">Los cambios que suceden durante la pubertad y adolescencia pueden provocar un desbalance hormonal y así más granitos e imperfecciones en la piel.</th>
	</tr>
	<tr style="width: 100%;">
		<th style=" font-weight: lighter; padding-bottom: 5px;">Los cambios provocados por la menstruación y el embarazo así como el estrés pueden provocar un desbalance hormonal y así más granitos e imperfecciones en la piel.</th>
	</tr>
	<tr style="width: 100%;">
		<th style=" font-weight: lighter; padding-bottom: 5px;">El sol en dosis de 15 minutos y no más ayuda a reducir el acné ya que la Vitamina D que nutre la piel. Usá siempre protección solar libre de aceite. Así no tapa los poros ni contribuye a la aparición del acné.</th>
	</tr>
</table> --}}

<h2 style="color: #34D0D0; text-align: left;">PRODUCTOS PARA TU TIPO DE PIEL</h2>
<table cellspacing="0" style="width: 100%; border: solid 1px #f1f1f1; background: #ffffff; font-size: 12px;">
@foreach($products as $product)
<tr style="width: 100%; list-style: none;">
	<th style="width: 20%; text-align: center;"><img style="display: block;" src="{{ App::$base_path.$product->thumbnail->to }}" alt="{{ $product->name }}" width="150"> <br><br></th> 
	<th style="width: 25%;"><p>{{ $product->name }}</p><a href="{{ $product->etailers[0]->url }}" style="color: #154781;" target="_blank" title="{{ $product->name }}">Comprar</a></th>
	<th style="width: 55%; text-align: left; font-weight: lighter;">{{ $product->description }}</th>
</tr>
@endforeach
</table>
</body>
</html>