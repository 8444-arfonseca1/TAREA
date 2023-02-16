<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<form name="figuras" method="POST" action="" >
			<table border=0 align="center">
				<tr>
					<th colspan="2">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select name="tipo" OnChange="ingresoLados()">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input type="text" name="lado_1"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input type="text" name="lado_2"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input type="text" name="lado_3"size="4" disabled></td>
				</tr>							
				<tr>
					<th colspan="2"><input type="submit" name="calcular" value="Calcular"></th>
				</tr>
			</table>
			</form>
			<script>
			function ingresoLados() {
				var tipo = document.forms["figuras"]["tipo"].value;
				if (tipo == "cuadrado") {
					document.forms["figuras"]["lado_1"].disabled = false;
					document.forms["figuras"]["lado_2"].disabled = true;
					document.forms["figuras"]["lado_3"].disabled = true;
				} else if (tipo == "rectangulo") {
					document.forms["figuras"]["lado_1"].disabled = false;
					document.forms["figuras"]["lado_2"].disabled = false;
					document.forms["figuras"]["lado_3"].disabled = true;
				} else if (tipo == "triangulo") {
					document.forms["figuras"]["lado_1"].disabled = false;
					document.forms["figuras"]["lado_2"].disabled = false;
					document.forms["figuras"]["lado_3"].disabled = false;
				} else {
					document.forms["figuras"]["lado_1"].disabled = true;
					document.forms["figuras"]["lado_2"].disabled = true;
					document.forms["figuras"]["lado_3"].disabled = true;
				}
			}
			</script>';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
