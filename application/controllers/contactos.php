<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Sitio Solidos Y Lodos Nacionales S.A.
*
* Clase de la pagina del formulario de contactos
*
* @author       Eduardo Villota <ev_villota@hotmail.es>
* @copyright    Copyright (c) 2008 - 2012, Solidos Y Lodos Nacionales S.A.
* @link         http://sln-ec.com/index.php/contactos/
* @version      1.0
* @package      Sitio Web 
* 
*/

class Contactos extends CI_Controller {
    #Variables que gusrdan informacion de los contenidos de las paginas y parametros
    #para el enviio de correo y el ensamblado de los mismos
    private $Data_;
    private $Articulos_;
    private $Pagina_;
    private $Error_ = true;
    private $Formulario_ = true;
    private $MensajeError_ ;
    private $CamposFormulario_;
    private $Asunto_ = 'Solicitud de información de sln-ec.com';
    private $Destinatario1_ ='info@sln-ec';
    private $Destinatario2_ ='eduardo@sln-ec';
    private $CuerpoMail_;

    function __contruct() {
            parent::__contrunct();
        }
    /**
    * Funcion de la pagina principal de esta clase
    */    
    public function index()
    {
        
     #obtenemos valores de esta pagina de la base de datos
     $this->db->where('id_pagina',10);
     $this->Data_ = array('query' => $this->db->get('pagina')); 
     #obtenemos los articulos de la pagina

     $this->db->where('id_pagina',10);
     $this->Articulos_ = array('query' => $this->db->get('contenido'));
     
     #armamos los contenidos del menu lateral del sitio
     $this->Data_['menu_lateral'] = array(      
        ' <li><a href="' . base_url() . '">' . 'Inicio' .'</a> </li>',
        ' <li><a href="' . base_url() . 'index.php/nosotros">' . 'About Us' .'</a> </li>',
        ' <li><a href="' . base_url() . 'index.php/politicas">' . 'Políticas' .'</a> </li>',
        ' <li><a href="' . base_url() . 'index.php/certificacion">' . 'Certificaciones' .'</a> </li>',
        ' <li><a href="' . base_url() . 'index.php/procesos">' . 'Procesos' .'</a> </li>',        
        ' <li><a href="' . base_url() . 'index.php/proyectos">' . 'Proyectos' .'</a> </li>',
        ' <li><a href="' . base_url() . 'index.php/hseq">' . 'HSEQ' .'</a> </li>',
        ' <li><a href="' . base_url() . 'index.php/servicios">' . 'Servicios' .'</a> </li>',
        ' <li><a href="' . base_url() . 'index.php/equipos">' . 'Equipos' .'</a> </li>');
     #armamos la cabecera del sitio
     $this->Pagina_ =  $this->load->view('cabecera',$this->Data_ ,true);    
     #armamos los menus del sitio
     $this->Pagina_ = $this->Pagina_ . $this->load->view('menu',$this->Data_,true); 
     #armamos el(los) contenido(s) de la pagina
     $this->Pagina_ = $this->Pagina_ . $this->load->view('formulario','',true);   
     #armamos el pie de pagina del sitio
     $this->Pagina_ = $this->Pagina_ . $this->load->view('pie','',true);
     #imprimimos el sitio completo
     print $this->Pagina_;
    
    }
    
    /**
    * Funcion que recibe el formulario de contacto
    */
    public function recibir(){
     #todos son inocentes hasta que se demuestre lo contrario (rebicion de datos)   
     $this->Formulario_ = true;
     $this->CamposFormulario_ = array(
                        'fecha' => date('Y-m-d h:m:s'), 
                        'nombres' => $this->input->post('nombres'),
                        'empresa' => $this->input->post('empresa'),
                        'email'   => $this->input->post('email'),
                        'telefono' => $this->input->post('telefono'),
                        'asunto'   => $this->input->post('asunto'),
                        'texto_asunto' => $this->input->post('texto_asunto'),
                        'ip_cliente' => $_SERVER['REMOTE_ADDR']
                        );          
    #validamos algunos campos del arreglo por tamaño
     foreach ($this->CamposFormulario_ as $key) {
         if (strlen($key) < 2){
            $this->Formulario_ = false;
            $this->MensajeError_ = 'Uno o mas de los campos contiene informacion incompleta o demaciado pequeña como para ser enviada, favor completar la información para continuar...';            
            break;
         }
     }
     #vakidamos la direccion de correo     
     $this->Error_ = valid_email($this->input->post('email'));
     if (!$this->Error_){
        $this->MensajeError_ = 'La direccion  de correo no es válida por favor ingrese su direccion nuevamente.';
     }

     #tomamos una decicion para este formulario
     if (($this->Error_ == false) or ($this->Formulario_ == false)) {
        $this->devolver();        
     }
     elseif (($this->Error_ == true) and ($this->Formulario_ == true)){
        $this->confirmar();
     }
  
    }        

    /**
    * retorna un formulario para que sea completado nuevamente
    */
    private function devolver(){
        #obtenemos valores de esta pagina de la base de datos
     $this->db->where('id_pagina',10);
     $this->Data_ = array('query' => $this->db->get('pagina')); 
     #obtenemos los articulos de la pagina

     $this->db->where('id_pagina',10);
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
     $error = array('Mensaje' => $this->MensajeError_);
     $this->Pagina_ = $this->Pagina_ . $this->load->view('formulario_error',$error,true);   
     $this->Pagina_ = $this->Pagina_ . $this->load->view('formulario', $this->CamposFormulario_,true);   
     #armamos el pie de pagina del sitio
     $this->Pagina_ = $this->Pagina_ . $this->load->view('pie','',true);
     #imprimimos el sitio completo
     print $this->Pagina_;


    }

    /**
    * Envia el formulario por correo y confirma al usuario el envío del mismo    
    */
    private function confirmar(){
        #armamos nuestro correo destinatarios info@sln-ec.com y eduardosln-ec.com
        $this->CuerpoMail_ = 'Este mensaje ha sido enviado desde el sitio web de SLN S.A.
                            El mensaje fue enviado por ' . $this->input->post('nombres') .
                            'El cuerpo del mensaje es el siguiente:' . $this->input->post('asunto') .
                            ' ' . $this->input->post('texto_asunto') . 'El remitente ha propor
                            sionado la siguiente información:
                            Nombres: ' . $this->input->post('nombres') . 
                            'Empresa:' . $this->input->post('empresa') . 
                            'Email:' . $this->input->post('email') . 
                            'Telefono:' . $this->input->post('telefono') . 
                            'Ip Remitente:' . $_SERVER['REMOTE_ADDR'];
        #Enviamos el Correo                      
        mail($this->Destinatario1_, $this->Asunto_, $this->CuerpoMail_);
        mail($this->Destinatario2_, $this->Asunto_, $this->CuerpoMail_);

         #obtenemos valores de esta pagina de la base de datos
         $this->db->where('id_pagina',10);
         $this->Data_ = array('query' => $this->db->get('pagina')); 
         #obtenemos los articulos de la pagina

         $this->db->where('id_pagina',10);
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
         $this->Pagina_ = $this->Pagina_ . $this->load->view('formulario_aceptado','',true);   
         #armamos el pie de pagina del sitio
         $this->Pagina_ = $this->Pagina_ . $this->load->view('pie','',true);
         #imprimimos el sitio completo
         print $this->Pagina_;
            
    }
    

}