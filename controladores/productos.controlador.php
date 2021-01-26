<?php

class ControladorProductos
{


	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/
	static public function ctrMostrarProductos($item, $valor){
		
	 $tabla = "medicamentos";
	 
	 $respuesta = ModeloProductos::mdlMostrarProductos($tabla,$item,$valor);
	  return $respuesta;
	  
	}
	
	/*=============================================
	CREAR 
	=============================================*/

	static public function ctrCrearProducto(){
		if (isset($_POST['nuevaDescripcion'])){
			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevaDescripcion'])){
				$tabla="medicamentos";
				$datos = array(
					"nombre_C" => $_POST['nuevaDescripcion'],
					"nombre_Q" => $_POST['nuevoQuimico'],
					"medidas" => $_POST['Unidades'],
					"stock" => $_POST['nuevoStock'],
					"fecha_CD" => $_POST['fecha_CD']
					
				);

				$respuesta = ModeloProductos::mdlIngresarProductos($tabla,$datos);
				if($respuesta=="ok"){
					echo"<script>
					 Swal.fire({
					  title: 'Success!',
					  text: '¡Se ha registrado un medicamneto de manera correctamente!',
					  icon: 'success',
					  confirmButtonText:'Ok'
					  }).then((result)=>{
					   if(result.value){
						window.location = 'Productos';
					   }
					  })
					</script>";
				   }
			}else{
				echo ("<script>

					Swal.fire({
							  title: 'Error!',
							  text: '¡Verifique los campos!',
							  icon: 'error',
							  confirmButtonText: 'Ok'
						
							});

				</script>");
			}

		}
		

	}

}
