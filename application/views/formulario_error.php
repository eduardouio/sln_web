<!-- inicio error en formulario -->
<div class="span9">
	<script type="text/javascript" src="<?php print base_url()?>js/bootstrap-alert.js"></script>                             	
	<script type="text/javascript">
		$(".alert").alert();
	</script>	
		<div  id="alert">
			<span class="btn btn-warning" style="font-size: 12px;"> 
				<a class="close" data-dismiss="alert" href="#">&times;</a>			
				Lo sentimos..
				<br/> 
				<?php @print $Mensaje;?>
		</span>
	</div>
</div>
<!-- fin error formulario -->