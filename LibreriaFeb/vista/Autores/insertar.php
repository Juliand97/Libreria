<?php
	include("../../controlador/seguridad pags.php");
	if(is_null($usuario) )
	{	
		
		</p>
					  </td>
					  <td>
						  <p>
							<label for="estadoa">Estado:   </label><br>
							<input type="text" name="estadoa" id="estadoa" placeholder="Estado">
						  </p>
					  </td>
					</tr>
					<tr>
					  <td>
						  <p>
							<label for="obras">Numero de Obras:   </label><br>
							<input type="text" name="obras" id="obras" placeholder="Numero de obras">
						  </p>
					  </td>
					</tr>
			</table>
			<input type="submit" name="Guardar" id="Guardar" class="boton1" value="Registrar">
		</form>
		<table width="200" border="0" align="center">
			<tr>
				<td>
					<form name="form2" method="post" action="../menureg.php">
						<input type="submit" name="borrar" id="borrar" value="regresar a Registros y Consultas" class="boton2"> 	
					</form>
				</td>
		</table>
	</body>
</html>