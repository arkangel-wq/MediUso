$(document).on('ready',function(){ // para esperar a que la viste se cargue por completo antes
    // antes de cargar el javaScript.

$('#btn-ingresar').click(function(){ // Esta función se ejecuta al presionar el botón
          // (creo que es obvio por el nombre).

          ini_set('display_errors', 1);
                            ini_set('display_startup_errors', 1);
                            error_reporting(E_ALL);

                            $database = 'posf';
                            $user = 'root';
                            $pass = '';
                            $host = 'localhost';
                            $db_name ='pos1';
                            $est='.sql';
   
   $fecha = date("Ymd-His"); //Obtenemos la fecha y hora para identificar el respaldo

   // Construimos el nombre de archivo SQL Ejemplo: mibase_20170101-081120.sql
   $salida_sql = $db_name,$fecha.$est; 
   
   //Comando para genera respaldo de MySQL, enviamos las variales de conexion y el destino

   $dump = "mysqldump --user={$user} --password={$pass} --host={$host} {$database} > $salida_sql 2>&1";
    $backup= system($dump,$file);
    
    if($backup == "error"){
    
        
        Swal.fire({
            title: 'Error!',
            text: '¡Comprueba los datos!',
            icon: 'error',
            confirmButtonText: 'Ok'
          });
        
       }else{
       
        Swal.fire({
            title: 'Success!',
            text: '¡Se ha creado exitosamente un backup!',
            icon: 'success',
            confirmButtonText:'Ok'
            }).then((result)=>{
             if(result.value){
              window.location = 'respaldo';
             }
            })
        
       }
  
});
});