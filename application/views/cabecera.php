<!DOCTYPE html>
<!--inicio cabecera -->
<html lang="es">
    <head>
        <title><?php foreach ($query->result() as $row){print $row->nombre_pagina;}; ?></title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />         
        <meta name="author" content="@eduardouio">
        <meta name="empresa" content="SLN Solido y Lodos Nacionales">
        <meta name="gerente SLN Solido y Lodos Nacionales" content="Marco Guamani">
        <meta name="actividad" content="Empresa petrolera, tratamientos de lodos de perforacion Quito-Ecuador">
        <meta name="descripcion" content="<?php foreach ($query->result() as $row){print $row->keywords;}; ?>">              
        <link rel="stylesheet" href="<?php print  base_url();?>css/bootstrap.min.css" type="text/css" media="all" />        
        <script type="text/javascript" src="<?php print base_url(); ?>js/jquery-1.7.2.min.js"></script>                             
        <link rel="shortcut icon" href="<?php print base_url() ;?>img/favicon.ico" />
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->  
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34281109-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>  
    </head>
<body>
    <!-- START PAGE SOURCE -->            
    <div class="container">
        <p>&nbsp;</p>
        <div class="row-fluid">
            <!-- capa del logo y del nombre de la empresa-->
            <div class="span4">                
                    <a href="<?php print base_url();?>">    
                    <img src="<?php print base_url(); ?>img/logo.gif" height="70" width="85" alt="SLN" style="float: left;"/>
                    <br/>
                    <h3> SLN Sólidos Y Lodos Nacionales</h3>
                    </a>                                            
            </div>                    
            <!-- capa del formulario de busquedas-->
            <div class ="span4"><br/><a href="http://sln-ec.com/webmail/" class="btn btn-info">Webmail</a></div>
            <div class="span4">
               <!-- Put the following javascript before the closing </head> tag. -->
<script>
  (function() {
    var cx = '010955790165484317859:quefi3uvmii';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.es/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>

<!-- Place this tag where you want both of the search box and the search results to render -->
<gcse:search></gcse:search>  
            </div>
        </div>
    </div>                
<!--fin cabecera -->      
