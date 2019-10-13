<?php

class EmpleadosC {

	public function RegistrarEmpleadoC() {

		if(isset($_POST["nombreR"])) {

			$datosC = array( 
				"nombre" => $_POST["nombreR"], 
				"apellido" => $_POST["apellidoR"],
				"email" => $_POST["emailR"],
				"puesto" => $_POST["puestoR"],
				"salario" => $_POST["salarioR"]
			);

			$tablaBD = "empleados";

			$respuesta = EmpleadosM::RegistrarEmpleadosM($datosC, $tablaBD);

			if($respuesta == "Bien") {

				header("location:index.php?ruta=empleados");

			} else {

				echo "Error en la carga de datos, intente nuevamente.";

			}

		}

	}

}