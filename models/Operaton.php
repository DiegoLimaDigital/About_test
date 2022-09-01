<?php
require_once("Conecction.php");
class  Operation
{


	private $ConsultaID;
	function __construct()
	{
	}
	function ejecutar($sql)
	{
		$conexion = new Conecction(); //Instancia de la clase Conecction
		//		$ConexionID=$conexion->conexion("limadigi_erp","perudigital.net.pe","limadigital","hGQnS4g_ZTJf9PVk");
		//		mysqli_close($conexion->conexion("erp_agencialimadigital","localhost","root",""));

		$ConexionID = $conexion->conexion("bdportafolio", "localhost", "root", ""); //Se conecta a la base de datos
		if ($sql == "") { //Si la consulta esta vacia
			$this->Error = "Error sentencia sql"; //Se asigna el error
			return "error de sentencia";
		}
		$this->ConsultaID = mysqli_query($ConexionID, $sql); //Se ejecuta la consulta
		mysqli_close($conexion->conexion("bdportafolio", "localhost", "root", ""));
		if (!$this->ConsultaID) { //Si la consulta no se ejecuta
			$this->Errono = mysqli_errno($ConexionID);
			$this->Error = mysqli_error($ConexionID);
			return "Operacion fallida";
		}

		return "Operacion Exitosa";
	}
	function array_push_assoc(array &$arrayDatos, array $values) //Funcion para agregar un array a otro array
	{
		$arrayDatos = array_merge($arrayDatos, $values); //Une los dos arrays
	}
	function listar($sql)
	{
		$conexion = new Conecction();
		$ConexionID = $conexion->conexion("bdportafolio", "localhost", "root", "");
		$List = array();
		$this->ConsultaID = mysqli_query($ConexionID, $sql);
		$j = 0;
		$assciativo = array();
		if (!$this->ConsultaID) {
			return "Operacion fallida";
		}


		while ($row = mysqli_fetch_assoc($this->ConsultaID)) { //Recorre el resultado de la consulta

			foreach ($row as $key => $value) { //Recorre el array asociativo
				$this->array_push_assoc($assciativo, array($key => $value));
			}
			array_push($List, $assciativo); //Agrega el array asociativo a la lista
		}
		mysqli_close($conexion->conexion("bdportafolio", "localhost", "root", "")); //Cierra la conexion
		return $List;
	}

	function agregar($sql)
	{
		$conexion = new Conecction();
		$ConexionID = $conexion->conexion("bdportafolio", "localhost", "root", "");
		$this->ConsultaID = mysqli_query($ConexionID, $sql);
		mysqli_close($conexion->conexion("bdportafolio", "localhost", "root", ""));
		if (!$this->ConsultaID) {
			return "Operacion fallida";
		}
		return "Operacion Exitosa";
	}

	function modificar($sql)
	{
		$conexion = new Conecction();
		$ConexionID = $conexion->conexion("bdportafolio", "localhost", "root", "");
		$this->ConsultaID = mysqli_query($ConexionID, $sql);
		mysqli_close($conexion->conexion("bdportafolio", "localhost", "root", ""));
		if (!$this->ConsultaID) {
			return "Operacion fallida";
		}
		return "Operacion Exitosa";
	}

	function eliminar($sql)
	{
		$conexion = new Conecction();
		$ConexionID = $conexion->conexion("bdportafolio", "localhost", "root", "");
		$this->ConsultaID = mysqli_query($ConexionID, $sql);
		mysqli_close($conexion->conexion("bdportafolio", "localhost", "root", ""));
		if (!$this->ConsultaID) {
			return "Operacion fallida";
		}
		return "Operacion Exitosa";
	}
	
	function getCampos()
	{
		return mysqli_num_fields($this->ConsultaID);
	}
	function getNameCampo($numCampo)
	{

		$properties = mysqli_fetch_field_direct($this->ConsultaID, $numCampo);
		return is_object($properties) ? $properties->name : null;
	}
	function getNumRegistro()
	{
		return mysqli_num_rows($this->ConsultaID);
	}

	function getConsult()
	{
		echo "<table border=1 align='center'>\n";
		echo "<tr>\n";
		for ($i = 0; $i < $this->getCampos(); $i++) {
			echo "<td><b>" . $this->getNameCampo($i) . "</b></td>";
		}
		echo "</tr>\n";
		while ($row = mysqli_fetch_array($this->ConsultaID)) {
			echo "<tr>\n";

			for ($i = 0; $i < $this->getCampos(); $i++) {
				echo "<td>" . $row[$i] . "</td>\n";
			}
			echo "</tr>";
		}
	}
}
