<table>
	<thead>
		<th>
			
		</th>
	</thead>
	<tbody>
		<tr>
			<td><h4>Nombre</h4></td><td><input type="text" id="nombre"></td>
		</tr>
		<tr>
			<td><h4>direccion</h4></td><td><input type="text" id="direccion"></td>
		</tr>
		<tr>
			<td><h4>telefono</h4></td><td><input type="text" id="telefono"></td>
		</tr>
		<tr>
			<td><h4>Contacto</h4></td>
			<td><select id="contacto">
			<?php 
				$result=get_personal();
				while($dato_personal=$result->fetch_assoc()){
					echo '<option value="'.$dato_personal['cod_personal'].'">'.$dato_personal['nombre'].'</option>';

				}

			?>

				</select>
			</td>
		</tr>
		<tr>
			<td><button class="btn_set_hostal">Enviar</button></td>
		</tr>
	</tbody>
</table>