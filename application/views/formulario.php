<!--inicio cuerpo del formulario -->
<div class="span9">
	<div class="hero-unit">	
		<form method="post" id="formulario" action="<?php print base_url();?>index.php/contactos/recibir/">
		<fieldset>
		<div class="control-group">
			<div class="controls">
				<label class="control-label">Nombres:</label> 
				<input class="input-xlarge focused" required="required" placeholder="Igrese Sus Nombres" id="nombres" name="nombres" type="text" value="<?php @print $nombres;?>">				           
			</div>			
			<div class="controls">
				<label class="control-label">E-mail:</label>
				<input  placeholder="Direccion Email" required="required" id="email" name="email" type="text" value="<?php @print $email;?>">
			</div>			
			<div class="controls">
				<label class="control-label">Empresa:</label>            
				<input class="input-small" placeholder="Empresa" required="required" id="empresa" name="empresa" type="text" value="<?php @print $empresa;?>">
			</div>						
				<div class="controls">
				<label class="control-label">Telefono:</label>
				<input class="input-small" required="required" placeholder="Telefono" id="telefono" name="telefono" type="text" value="<?php @print $telefono;?>">
			</div>			
				<div class="controls">
				<label class="control-label">Asunto:</label>
				<input class="input-xlarge" required="required" placeholder="Asunto Mensaje" id="asunto" name="asunto" type="text" value="<?php @print $asunto;?>">
			</div>			
			<div class="controls">
				<label class="control-label">Descripción:</label>            
				<textarea class="input-xlarge" required="required" placeholder="Sus Comentarios Son Importantes" id="texto_asunto" name="texto_asunto" rows="4" columns="20"><?php @print $texto_asunto;?></textarea>
			</div>
			<div class="controls">
			<div class="form-actions">
			<button type="submit" class="btn btn-info">Enviar Información</button>
			<button type="reset" class="btn btn-warning" >Reset</button>
		</div>		
		<b>Dirección Oficina: </b> Av Cristóbal Colón 1133 y Av. Rio Amazonas Edificio Arista Piso 5 <b>Of:</b> 502<br/>
		<b>Telfonos:</b> +593 (2) 2533-563 +593 (2) 2551-961 <b>Fax:</b> 593 (2) 2233-578<br/> 
		<b>Email:</b> <a href="mailto:info@sln-ec.com" class="btn btn-inverse"> info@sln-ec.com </a>
		<a href="mailto:operaciones@sln-ec.com" class="btn btn-inverse">operaciones@sln-ec.com  </a>
			</div>
		</fieldset>
		</form>
		</div>
	</div>
</div>
<!--fin cuerpo del formulario -->