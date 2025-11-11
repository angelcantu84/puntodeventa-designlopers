<?php

	const APP_URL="__APPURL__";
	const APP_NAME="VENTAS";
	const APP_SESSION_NAME="POS";
	// const PAIS="60"; // el salvador
	const PAIS="__PAIS_CODE__"; // el salvador

	/*----------  Tipos de documentos  ----------*/
	if( !strcmp(PAIS, 60) ) {
	 	define('DOCUMENTOS_USUARIOS', ["DUI","DNI","Cedula","Licencia","Pasaporte","Otro"]);
	}
	else {
		define('DOCUMENTOS_USUARIOS', ["INE","RFC","CURP","Licencia","Pasaporte","Otro"]);
	}


	/*----------  Tipos de unidades de productos  ----------*/
	const PRODUCTO_UNIDAD=["Pieza", "Unidad","Libra","Kilogramo","Caja","Paquete","Lata","Galon","Botella","Tira","Sobre","Bolsa","Saco","Tarjeta","Otro"];

	/*----------  Configuración de moneda  ----------*/
	const MONEDA_SIMBOLO="$";

	if( !strcmp(PAIS, 60) )
		define('MONEDA_NOMBRE', "USD");
	else
		define('MONEDA_NOMBRE', "MXN");

	const MONEDA_DECIMALES="2";
	const MONEDA_SEPARADOR_MILLAR=",";
	const MONEDA_SEPARADOR_DECIMAL=".";


	/*----------  Marcador de campos obligatorios (Font Awesome) ----------*/
	const CAMPO_OBLIGATORIO='&nbsp; <i class="fas fa-edit"></i> &nbsp;';

	/*----------  Zona horaria  ----------*/
	if( !strcmp(PAIS, 60) )
		date_default_timezone_set("America/El_Salvador");
	else
		date_default_timezone_set("America/Matamoros");

	/*
		Configuración de zona horaria de tu país, para más información visita
		http://php.net/manual/es/function.date-default-timezone-set.php
		http://php.net/manual/es/timezones.php
	*/