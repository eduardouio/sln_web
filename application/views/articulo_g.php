<!--inicio de articulo grande-->
<div class="span9">  
 <div class="hero-unit" id="justificado">
 	<?php

 	foreach ($query->result() as $row){
 		print '<p>'; 		
 		print '<h4>' . $row->titulo_articulo . '</h4>'; 		 		
 		print $row->contenido_articulo;
 		print '</p><hr/>';
 	}
 	?>
	</div>
</div>

<!--fin de articulo grande-->