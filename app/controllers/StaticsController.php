<?php
	namespace App\Controllers;

	// use App\Models\Category;
	// use App\Models\Slider;
	use App\Models\Call;
	use App\Models\Gender;
	use App\Models\Type;
	use App\Models\Task;
	use App\Models\People;
	use App\Models\Age;
	use App\Models\Time;
	use App\Models\Provider;
	use App\Models\PP;
	use App\Models\Experience;

	use Spipu\Html2Pdf\Html2Pdf;

	class StaticsController {

		function index() {
			// $categories = Category::all();
			$experience = Experience::all();
			$pp = PP::all();
			$calls = Call::all();
			$types = Type::all();
			$tasks = Task::all();
			$people = People::all();
			$times = Time::all();
			$providers = Provider::all();
			$genders = Gender::all();

			view('statics.index', compact('pp','experience','calls','genders', 'types','tasks', 'people', 'times','providers'));
		}

		function form() {
			$experience = Experience::all();
			$pp = PP::all();
			$calls = Call::all();
			$types = Type::all();
			$tasks = Task::all();
			$people = People::all();
			$times = Time::all();
			$providers = Provider::all();
			$genders = Gender::all();
			$ages = Age::all();

			view('dashboard.form', compact('pp','experience','calls','genders', 'types','tasks', 'people','ages', 'times','providers'));
		}

		function info(){
			$fp = fopen('app/data/info.json', 'w');
			fwrite($fp, json_encode($_POST,true));
			fclose($fp);
			// selfindex();
			header("Location: /infografia/");
		}

		function jsonAge(){
			$ages = Age::all();
			echo json_encode($ages);
		}

		function error_404() {
			view('statics.404');
		}

		function download_pdf() {
			$ids = explode(",", $_GET["ids"]);
			$products = Product::getProducts($ids);
			$sensible = true;
			// view("statics.pdf", compact("products"));
			$html = html("statics.pdf", compact("products", "sensible"));

			$html2pdf = new Html2Pdf('L', 'A4', 'es');
			$html2pdf->writeHTML($html, false);
			$html2pdf->output('MiAsepxiaIdeal.pdf', 'D');
			// $html2pdf->output();
		}

	}
