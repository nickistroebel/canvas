<div class="proyector"> 
		<div id="newcanvas">
			<div class="proyecto" id="proyectonuevo">
				Crear proyecto
			</div>
		</div>
		<?php
		 		include_once 'php/core.php';
				$id = sesionid();
				$registros = consultar("SELECT * FROM proyectos WHERE id_usuario = '$id'");
				$encontrado = mysqli_num_rows($registros);
				if ($encontrado>0){
					while($rows = mysqli_fetch_assoc($registros)){
						$idproyecto = $rows['id'];
						echo '	<a href="?pag=canvas&id='.$idproyecto.'"> 
									<div class="proyecto">
										'.$rows['Proyecto'].'
									</div>
								</a>';
					}
				} else {

				}
 
		?> 
</div>