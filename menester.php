<?php 
    $mensaje = "";
    $CI =& get_instance();

    if($_POST){
        $datos = $_POST;
        $datos["ip"] = $_SERVER["REMOTE_ADDR"];
        $CI->db->insert('firmas', $datos);
        $mensaje="Firma guardada";
    }

?>
<html>
    <head>
        <title>Firma aqu&iacute;</title>
        
        <!-- DECLARACION DEL BOOSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!--FIN DE LA DECLARACION DEL BOOSTRAP-->
        
    </head>
<body>
    <div class="container">
        <h3>Ingresa tus datos aqu&iacute;, con confianza</h3>
        <form method="post">
        <div class="row">
            <div class="col col-sm-6">
                <div class="form-group input-group">
                    <span class="input-group-addon">Cedula</span>
                    <input type="text" required class="form-control" name="cedula"/>
                </div>
                
                <div class="form-group input-group">
                    <span class="input-group-addon">Nombre</span>
                    <input type="text" required class="form-control" name="nombre"/>
                </div>
                
                <div class="form-group input-group">
                    <span class="input-group-addon">Email</span>
                    <input type="text" required class="form-control" name="email"/>
                </div>
                
                <div class="form-group input-group">
                    <span class="input-group-addon">Telefono</span>
                    <input type="tel" required class="form-control" name="telefono"/>
                </div>
                
                <div class="form-group input-group">
                    <span class="input-group-addon">Comentario</span>
                    <textarea name="comentario" class="form-control"></textarea>
                </div>
                
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Registrar</button>
                    <a href="<?php echo base_url('T6'); ?>" class="btn btn-info">Regresar</a>
                </div>
            </div>
            
            <input type="hidden" name="lat" id="lat"/>
            <input type="hidden" name="lon" id="lon"/>
        </div>
        </form>
        
        <h3><?php echo $mensaje; ?></h3>
    </div>
    
    <script>
    window.onload = function(){
        navigator.geolocation.getCurrentPosition(function(jaja){
            document.getElementById("lat").value = jaja.coords.latitude;
            document.getElementById("lon").value = jaja.coords.longitude;
        });
    }
    </script>
</body>
</html>