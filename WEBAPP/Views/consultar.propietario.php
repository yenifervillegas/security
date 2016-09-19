<!-- Jhon T. Gómez -->

  <table id="tabla" class="striped responsive-table">
  	<thead>
  		<tr>
  			<td>Cedula</td>
  			<td>Nombre</td>
  			<td>Apellido</td>
  			<td>Telefono</td>
  			<td>Direccon</td>
  			<td>Email</td>
        <td>Cargo</td>
        <td>Centro</td>
        <td>Accion</td>
      </tr>
  	</thead>
  	<tbody>
      <?php require '../Model/conexion.php'; require '../Model/propietario.class.php'; $dato = registro::consultar_propietario(); ?>
      <?php foreach ($dato as $views): ?>
        <tr>
          <td><?php echo $views["prop_doc"]?></td>
          <td><?php echo $views["prop_nom"]?></td>
          <td><?php echo $views["prop_ape"]?></td>
          <td><?php echo $views["prop_tel"]?></td>
          <td><?php echo $views["prop_dir"]?></td>
          <td><?php echo $views["prop_ema"]?></td>
          <td><?php echo $views["prop_car"]?></td>
          <td><?php echo $views["prop_cen"]?></td>
          <td>
            <a href="dashboard.php?seccion=m.propietario&cod=<?php echo base64_encode($views['prop_cod']+500); ?>" class="btn-floating light-green">
              <i class="material-icons">edit</i>
            </a>
            <a href="../Controller/propietario.controller.php?e=e&cod=<?php echo base64_encode($views['prop_cod']+500); ?>" class="btn-floating red">
              <i class="material-icons">delete_forever</i>
            </a>
          </td>
        </tr>
      <?php endforeach ?>
  	</tbody>
  </table>
