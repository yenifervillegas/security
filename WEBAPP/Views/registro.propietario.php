
<section >
 		<div class="row">
      <form class="col s12" action="../Controller/propietario.controller.php" method="post">
        <center><h4 class="thin">Registro de Usuario</h4></center>
 				  <div class="row">
 					 		
 	
 	  				
 				       <input type="text" name="nom"  required>
 				       <label>Nombre</label>
 				   
 				       <input type="text" name="ape"  required>
 				       <label>Apellido</label>
 				   
               <input  type="number" name="ced"  required>
               <label >Tipo de documento</label>

               <input type="number" name="ced"  required>
               <label >Numero de Documento</label>

 							 <input  type="number" name="tel"  >
 							 <label >Telefono</label>
 		  	
 							 <input  type="text" name="dir"  required>
 							 <label >Direccion</label>
 		  			
 							 <input  type="email" name="ema"  >
 							 <label >Email</label>
 						
 							 <input  type="text" name="car"  >
 							 <label>Cargo</label>
 		  			
 							 <input  type="text" name="cen"  required>
 							 <label >Centro</label>

               <input  type="text" name="pass"  required>
               <label >Contraseña</label>
 		  			</div>
          </div>
 				
 						<button name="g">Guardar</button>
 					</div>
 				</div>
 			</form>

  </section>

  <section >
    <?php include 'consultar.propietario.php'; ?>
  </section>
