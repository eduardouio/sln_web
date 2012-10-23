<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Sitio Solidos Y Lodos Nacionales S.A.
*
* Clase de la pagina de servicios
*
* @author		Eduardo Villota <ev_villota@hotmail.es>
* @copyright	Copyright (c) 2008 - 2012, Solidos Y Lodos Nacionales S.A.
* @link			http://sln-ec.com/index.php/servicios/
* @version 		1.0
* @package		Sitio Web 
* 
*/

class Servicios extends CI_Controller {
	#datos de la pagina y la variable de que contiene el string de la pagina
	private $Data_;
	private $Articulos_;
	private $Pagina_;

	function __contruct() {
            parent::__contrunct();
        }
    /**
    *
    * Funcion de la pagina principal de esta clase
    */    
	public function index()
	{
		
	 #obtenemos valores de esta pagina de la base de datos
	 $this->db->where('id_pagina',7);
	 $this->Data_ = array('query' => $this->db->get('pagina'));	
	 #obtenemos los articulos de la pagina

	 $this->db->where('id_pagina',7);
	 $this->Articulos_ = array('query' => $this->db->get('contenido'));
	 
	 #armamos los contenidos del menu lateral del sitio
	 $this->Data_['menu_lateral'] = array( 	 	
	 	' <li><a href="' . base_url() . '">' . 'Inicio' .'</a> </li>',
	 	' <li><a href="' . base_url() . 'index.php/politicas">' . 'Políticas' .'</a> </li>',
	 	' <li><a href="' . base_url() . 'index.php/certificacion">' . 'Certificaciones' .'</a> </li>',
	 	' <li><a href="' . base_url() . 'index.php/procesos">' . 'Procesos' .'</a> </li>',
	 	' <li><a href="' . base_url() . 'index.php/servicios">' . 'Servicios' .'</a> </li>',
	 	' <li><a href="' . base_url() . 'index.php/equipos">' . 'Equipos' .'</a> </li>');
	 #armamos la cabecera del sitio
	 $this->Pagina_ =  $this->load->view('cabecera',$this->Data_ ,true);	
	 #armamos los menus del sitio
	 $this->Pagina_ = $this->Pagina_ . $this->load->view('menu',$this->Data_,true);	
	 #armamos el(los) contenido(s) de la pagina
	 $this->Pagina_ = $this->Pagina_ . $this->load->view('articulo_g',$this->Articulos_,true);	 
	 #armamos el pie de pagina del sitio
	 $this->Pagina_ = $this->Pagina_ . $this->load->view('pie','',true);
	 #imprimimos el sitio completo
	 print $this->Pagina_;
	
	}
	
}