<?php
class Model_Tariff extends Model
{
	public function get_data()
	{	
		require 'connection.php';
		if(isset($_POST['sortCheck']) and isset($_POST['filterCheck']))
			return $link->query("SELECT id_tariff, cost, tariff.name, type_service.name FROM tariff right join type_service on tariff.id_tariff=type_service.id_type_service where tariff.".$_POST['filterSelect']." like '%".$_POST['filterCheck']."%' order by tariff.".$_POST['sortSelect'].";");
		elseif(isset($_POST['filterCheck']))
			return $link->query("SELECT id_tariff, cost, tariff.name, type_service.name FROM tariff right join type_service on tariff.id_tariff=type_service.id_type_service where tariff.".$_POST['filterSelect']." like '%".$_POST['filterCheck']."%';");
		elseif(isset($_POST['sortCheck']))
			return $link->query("SELECT id_tariff, cost, tariff.name, type_service.name FROM tariff right join type_service on tariff.id_tariff=type_service.id_type_service order by tariff.".$_POST['sortSelect'].";");
		else
			return $link->query("SELECT id_tariff, cost, tariff.name, type_service.name FROM tariff right join type_service on tariff.id_tariff=type_service.id_type_service;");
	}
	public function give_data()
	{
		session_start();
		if (!isset($_SESSION['flag2'])) {
			$_SESSION['flag2'] = 0;
		//	print( $_SESSION['flag']);
			$_SESSION['id_tariff_custom'] = array();
		}
		if(isset($_POST['tariff_id']))
		{
		//	print("add");
			$_SESSION['id_tariff_custom'][] = $_POST['tariff_id'];
		}
		//var_dump($_SESSION['id_tariff_custom']);
	}
}
?>