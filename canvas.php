<script type="text/javascript" src="js/camba.js" ></script> 
<script type="text/javascript" src="js/jquery-1.11.3.js" ></script> 


<?php

	$id = $_GET['id'];
	include_once ('forms/inputform.php');
	include_once ('php/core.php');

?>
<div class="control" id="idp"><?php echo $id; ?></div>
<div class="boton_a br30 hand"></div>
<div class="boton_b br30 hand"></div>
<div class="boton_c br30 hand"></div>
<div class="boton_d br30 hand"></div>

<div class="contenedor">
	<div class="arriba">
		<div class="marco_1">
			<div class="titulos">Asociaciones clave</div>
			<div id="nuevo1" class="nuevo">
				[+] Crear nuevo
			</div>
			<?php
				/********************************************/
				$registros = consultar("SELECT * FROM tablero WHERE seccion='Asociaciones clave' AND id_proyecto='$id' ");
				while($rows = mysqli_fetch_assoc($registros)){
					echo '<div class="normal">
						'.$rows['contenido'].' 
					</div>';
				}
				/********************************************/
			?>
		</div>
		<div class="separador_vertical"></div>
		<div class="marco_1">
				<div class="marco_2">
					<div class="titulos">Actividades clave</div>
					<div id="nuevo2" class="nuevo">
						[+] Crear nuevo
					</div>
					<?php
						/********************************************/
						$registros = consultar("SELECT * FROM tablero WHERE seccion='Actividades clave' AND id_proyecto='$id' ");
						while($rows = mysqli_fetch_assoc($registros)){
							echo '<div class="normal">
								'.$rows['contenido'].' 
							</div>';
						}
						/********************************************/
					?>
				</div>
				<div class="separador_horzontal"></div>
				<div class="marco_2">
					<div class="titulos">Recursos clave</div>
					<div id="nuevo3" class="nuevo">
						[+] Crear nuevo
					</div>
					<?php
						/********************************************/
						$registros = consultar("SELECT * FROM tablero WHERE seccion='Recursos clave' AND id_proyecto='$id' ");
						while($rows = mysqli_fetch_assoc($registros)){
							echo '<div class="normal">
								'.$rows['contenido'].' 
							</div>';
						}
						/********************************************/
					?>
				</div>
		</div>
		<div class="separador_vertical"></div>
		<div class="marco_1">
			<div class="titulos">Propuestas de valor</div>
			<div id="nuevo4" class="nuevo">
				[+] Crear nuevo
			</div>
					<?php
						/********************************************/
						$registros = consultar("SELECT * FROM tablero WHERE seccion='Propuestas de valor' AND id_proyecto='$id' ");
						while($rows = mysqli_fetch_assoc($registros)){
							echo '<div class="normal">
								'.$rows['contenido'].' 
							</div>';
						}
						/********************************************/
					?>
		</div>
		<div class="separador_vertical"></div>
		<div class="marco_1">
				<div class="marco_2">
					<div class="titulos">Relaciones con clientes</div>
					<div id="nuevo5" class="nuevo">
						[+] Crear nuevo
					</div>
					<?php
						/********************************************/
						$registros = consultar("SELECT * FROM tablero WHERE seccion='Relaciones con clientes' AND id_proyecto='$id' ");
						while($rows = mysqli_fetch_assoc($registros)){
							echo '<div class="normal">
								'.$rows['contenido'].' 
							</div>';
						}
						/********************************************/
					?>
				</div>
				<div class="separador_horzontal"></div>
				<div class="marco_2">
					<div class="titulos">Canales</div>
					<div id="nuevo6" class="nuevo">
						[+] Crear nuevo
					</div>
					<?php
						/********************************************/
						$registros = consultar("SELECT * FROM tablero WHERE seccion='Canales' AND id_proyecto='$id' ");
						while($rows = mysqli_fetch_assoc($registros)){
							echo '<div class="normal">
								'.$rows['contenido'].' 
							</div>';
						}
						/********************************************/
					?>
				</div>
		</div>
		<div class="separador_vertical"></div>
		<div class="marco_1">
			<div class="titulos">Segmentos</div>
			<div id="nuevo7" class="nuevo">
				[+] Crear nuevo
			</div>
					<?php
						/********************************************/
						$registros = consultar("SELECT * FROM tablero WHERE seccion='Segmentos' AND id_proyecto='$id' ");
						while($rows = mysqli_fetch_assoc($registros)){
							echo '<div class="normal">
								'.$rows['contenido'].' 
							</div>';
						}
						/********************************************/
					?>
		</div>
	</div>
	<div class="abajo">
		<div class="marco_3">
			<div class="titulos">Estructura de costos</div>
			<div id="nuevo8" class="nuevo">
				[+] Crear nuevo
			</div>
					<?php
						/********************************************/
						$registros = consultar("SELECT * FROM tablero WHERE seccion='Estructura de costos' AND id_proyecto='$id' ");
						while($rows = mysqli_fetch_assoc($registros)){
							echo '<div class="normal">
								'.$rows['contenido'].' 
							</div>';
						}
						/********************************************/
					?>
		</div>
		<div class="separador_vertical_dos"></div>
		<div class="marco_3">
			<div class="titulos">Fuente de ingresos</div>
			<div id="nuevo9" class="nuevo">
				[+] Crear nuevo
			</div>
					<?php
						/********************************************/
						$registros = consultar("SELECT * FROM tablero WHERE seccion='Fuente de ingresos' AND id_proyecto='$id' ");
						while($rows = mysqli_fetch_assoc($registros)){
							echo '<div class="normal">
								'.$rows['contenido'].' 
							</div>';
						}
						/********************************************/
					?>
		</div>
	</div>
</div>
