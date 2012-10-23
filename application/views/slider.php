<!--slider inicio -->
   <div class="span9">
    <div class="hero-unit">
 <script type="text/javascript" src="<?php print base_url()?>js/jquery.easing.js"></script>
        <script type="text/javascript" src="<?php print base_url()?>/js/script.js"></script>  
  <script type="text/javascript">
 $(document).ready( function(){ 
    var buttons = { previous:$('#jslidernews2 .button-previous') ,
            next:$('#jslidernews2 .button-next') };      

    $('#jslidernews2').lofJSidernews( { interval:5000,
                        easing:'easeInOutQuad',
                        duration:1200,
                        auto:true,
                        mainWidth:684,
                        mainHeight:300,
                        navigatorHeight   : 100,
                        navigatorWidth    : 310,
                        maxItemDisplay:3,
                        buttons:buttons } );            
  });

</script>
<style>
  
  ul.lof-main-wapper li {
    position:relative;  
  }
</style>

<link rel="stylesheet" href="<?php print base_url()?>css/styles_lider.css" type="text/css" media="all" />

<div id="jslidernews2" class="lof-slidecontent" style="width:815px; height:300px;">
  <div class="preload"><div></div></div>    
         <!-- MAIN CONTENT --> 
              <div class="main-slider-content" style="width:684px; height:300px;">                
                <ul class="sliders-wrap-inner">
                    <li>
                            <img src="<?php print base_url()?>images/slider/slider_taladro.jpg" title="Sólidos Y Lodos Nacionales S.A." height="300" width="520">           
                          <div class="slider-description">
                            <h4>About Us</h4>
                            <p>Compañía Ecuatoriana de Servicios fundada en Noviembre de 2008 con domicilio en la ciudad de Quito...
                            <a class="btn btn-info" href="<?php print base_url()?>index.php/nosotros/">Continuar</a>
                            </p>
                         </div>
                    </li> 
                   <li>
                      <img src="<?php print base_url()?>/images/slider/slider_iso.jpg" title="certificacion" height="300" width="520"/>           
                         <div class="slider-description">                           
                            <h4>Contamos Con Certificación Iso 9001:2008</h4>
                            <p>Sólidos y Lodos Nacionales trabaja por el mejoramiento continuo de sus procesos y el perfeccionamiento...
                            <a class="btn btn-info" href="<?php print base_url()?>index.php/certificacion/">Continuar</a>
                            </p>
                         </div>
                    </li> 
                   <li>
                      <img src="<?php print base_url()?>images/slider/slider_equipos.jpg" title="equipos" height="300" width="520"/>            
                        <div class="slider-description">                          
                            <h4>Nuestros Equipos</h4>
                            <p>Contamos con equipos fabricados y diseñados con capacidad de responder a las necesidades de cada proceso y favoreciendo...
                            <a class="btn btn-info" href="<?php print base_url()?>index.php/equipos/">Continuar</a>
                            </p>
                         </div>
                    </li> 
                    <li>
                      <img src="<?php print base_url()?>images/slider/slider_procesos.jpg" title="procesos" height="300" width="520"/>            
                        <div class="slider-description">                          
                            <h4>Nuestros Procesos</h4>
                            <p>Proceso de control de sólidos: Parte del desarrollo óptimo de un proyecto de perforación es el Control de Sólidos...
                            <a class="btn btn-info" href="<?php print base_url()?>index.php/procesos/">Continuar</a>
                            </p>
                         </div>
                    </li> 
                    <li>
                      <img src="<?php print base_url()?>images/slider/slider_servicios.jpg" title="servicios" height="300" width="520"/>            
                        <div class="slider-description">                           
                           <h4>¡Siempre A Su Servicio!</h4>
                            <p>SLN SÓLIDOS Y LODOS NACIONALES S.A. está en capacidad de realizar...
                            <a class="btn btn-info" href="<?php print base_url()?>index.php/servicios/">Continuar</a>
                            </p>
                         </div>
                    </li> 
                    <li>
            
                      <img src="<?php print base_url()?>images/slider/slider_proyectos.jpg" title="proyectos" height="300" width="520"/>            
                        <div class="slider-description">                          
                            <h4>Proyectos</h4>
                            <p>Sólidos y Lodos Nacionales es una compañia con experiencia en el mercado de...
                            <a class="btn btn-info" href="<?php print base_url()?>index.php/proyectos/">Continuar</a>
                            </p>
                         </div>
                    </li> 
                
                  </ul>   
            </div>
       <!-- END MAIN CONTENT --> 
           <!-- NAVIGATOR -->
            <div class="navigator-content">
                  <div class="navigator-wrapper">
                        <ul class="navigator-wrap-inner">
                          <li>
                                <div>
                                    <img src="<?php print base_url()?>images/miniaturas/slider_taladro.jpg"/>
                                    <b> Nosotros </b><br/>
                                    Compañía Ecuatoriana de Servicios fundada en Noviembre de 2008 con domicilio en la ciudad de Quito...
                                </div>    
                            </li>
                             <li>
                                <div>
                                    <img src="<?php print base_url()?>images/miniaturas/slider_iso.jpg" />
                                    <b> Certificaciones Seguridad</b><br>                                    
                            Sólidos y Lodos Nacionales trabaja por el mejoramiento continuo de sus procesos y el perfeccionamiento...                                    
                                </div>    
                            </li>
                
                            <li>
                                <div>
                                    <img src="<?php print base_url()?>images/miniaturas/slider_equipos.jpg" />
                                    <b> Nuestros Equipos </b><br/>                          
                                      Contamos con equipos fabricados y diseñados con capacidad de responder a las necesidades de cada proceso y favoreciendo...
                                </div>     
                            </li>
                            
                           <li>
                                <div>
                                    <img src="<?php print base_url()?>images/miniaturas/slider_procesos.jpg" />
                                    <b> Nuestros Procesos</b><br/>
                                    Proceso de control de sólidos: Parte del desarrollo óptimo de un proyecto de perforación es el Control de Sólidos...
                                </div>
                            </li>    
                            <li>
                                 <div>
                                    <img src="<?php print base_url()?>images/miniaturas/slider_servicios.jpg" />
                                    <b> Siempre a su Servicio! </b><br/>                           
                                    SLN SÓLIDOS Y LODOS NACIONALES S.A. está en capacidad de realizar...
                                 </div>   
                            </li>
                           <li>
                                <div>
                                    <img src="<?php print base_url()?>images/miniaturas/slider_proyectos.jpg" />
                                    <b> Proyectos</b><br/>                            
                            Sólidos y Lodos Nacionales es una compañia con experiencia en el mercado de...
                                </div>
                            </li>         
                        </ul>
                  </div>
   
             </div> 
          <!----------------- END OF NAVIGATOR --------------------->          
 
     <!-- BUTTON PLAY-STOP -->
          <div class="button-control"><span></span></div>
          <!-- END OF BUTTON PLAY-STOP -->
           
 </div> 
 <!--slider fin -->