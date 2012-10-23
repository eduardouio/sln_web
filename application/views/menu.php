<!--inicio menus -->
<br/>
    <div class="container">
        <b>    
        <ul class="nav nav-tabs">
            <li class="<?php foreach ($query->result() as $row){if ($row->link == 'pag_01'){print 'active';}}; ?>"><a href="<?php print base_url();?>/">Home</a></li>
            <li class="<?php foreach ($query->result() as $row){if ($row->link == 'pag_02'){print 'active';}}; ?>"><a href="<?php print base_url();?>index.php/nosotros"/>About Us</a></li>            
            <li class="<?php foreach ($query->result() as $row){if ($row->link == 'pag_03'){print 'active';}}; ?>"><a href="<?php print base_url();?>index.php/politicas">Políticas</a></li>            
            <li class="<?php foreach ($query->result() as $row){if ($row->link == 'pag_04'){print 'active';}}; ?>"><a href="<?php print base_url();?>index.php/certificacion">Certificaciónes</a></li>
            <li class="<?php foreach ($query->result() as $row){if ($row->link == 'pag_05'){print 'active';}}; ?>"><a href="<?php print base_url();?>index.php/equipos">Equipos</a></li>            
            <li class="<?php foreach ($query->result() as $row){if ($row->link == 'pag_06'){print 'active';}}; ?>"><a href="<?php print base_url();?>index.php/procesos">Procesos</a></li>
            <li class="<?php foreach ($query->result() as $row){if ($row->link == 'pag_07'){print 'active';}}; ?>"><a href="<?php print base_url();?>index.php/servicios">Servicios</a></li>
            <li class="<?php foreach ($query->result() as $row){if ($row->link == 'pag_08'){print 'active';}}; ?>"><a href="<?php print base_url();?>index.php/hseq">HSEQ</a></li>
            <li class="<?php foreach ($query->result() as $row){if ($row->link == 'pag_09'){print 'active';}}; ?>"><a href="<?php print base_url();?>index.php/proyectos">Proyectos</a></li>            
            <li class="<?php foreach ($query->result() as $row){if ($row->link == 'pag_10'){print 'active';}}; ?>"><a href="<?php print base_url();?>index.php/contactos">Contáctenos</a></li>
        </ul>            
        </b>        
    </div>
    <div class="container">
     <div class="container-fluid"> 
        <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Información Adcional:</li>
                <?php
                    if (!empty($menu_lateral)): 
                          foreach ($menu_lateral as $key) {
                          print $key;
                          }
                    endif;                   
                  ?>            
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <!-- fin de menus -->