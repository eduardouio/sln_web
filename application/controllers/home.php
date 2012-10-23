<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Sitio Solidos Y Lodos Nacionales S.A.
*
* Clase de la pagina principal del sitio
*
* @author		Eduardo Villota <ev_villota@hotmail.es>
* @copyright	Copyright (c) 2008 - 2012, Solidos Y Lodos Nacionales S.A.
* @link			http://sln-ec.com/index.php/home
* @version 		1.0
* @package		Sitio Web
* @sugerencias http://goo.gl/bdNHB/ <p>averiguar de coffe script</p>
* 
*/
class Home extends CI_Controller {
	private $Data_;
	private $Pagina_;	
	
	function __contruct() {
            parent::__contrunct();          
        }

    /**
    * Funcione de la pagina principal de la clase el home del index del sitio
    * se va a armar el sitio parte por parte y concatenando los resultados en una variable
    */    
	public function index()
	{
	 
	#obtenemos los contenidos de la pagina desde la base de datos	
	 $this->db->where('id_pagina',1);
	 $this->Data_ = array('query' => $this->db->get('pagina'));	 
	  
	 #armamos los contenidos del menu lateral del sitio
	 $this->Data_['menu_lateral'] = array( 
	 	' <li><a href="' . base_url() . 'index.php/nosotros">' . 'Nosotros' .'</a> </li>',
	 	' <li><a href="' . base_url() . 'index.php/politicas">' . 'Políticas' .'</a> </li>',
	 	' <li><a href="' . base_url() . 'index.php/certificacion">' . 'Certificaciones' .'</a> </li>',
	 	' <li><a href="' . base_url() . 'index.php/procesos">' . 'Procesos' .'</a> </li>',
	 	' <li><a href="' . base_url() . 'index.php/contactos">' . 'Contáctenos' .'</a> </li>');
	 #armamos la cabecera del sitio
	 $this->Pagina_ =  $this->load->view('cabecera',$this->Data_ ,true);	
	 #armamos los menus del sitio
	 $this->Pagina_ = $this->Pagina_ . $this->load->view('menu',$this->Data_,true);	
	 #armamos el(los) contenido(s) de la pagina
	 $this->Pagina_ = $this->Pagina_ . $this->load->view('slider','',true);
	 #armamos el pie de pagina del sitio
	 $this->Pagina_ = $this->Pagina_ . $this->load->view('pie','',true);
	 #imprimimos el sitio completo
	 print $this->Pagina_;
	 


	 
	}

}
