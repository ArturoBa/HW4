<html>
    <head>
        <title>ASOPAO</title>
        
        <!-- DECLARACION DEL BOOSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!--FIN DE LA DECLARACION DEL BOOSTRAP-->
        
    </head>
<body style="background: #cccccc;">
    <div class="container">
        
        <div>
            <h1>Asociaci&oacute;n Para Alcanzar Objetivos (ASOPAO)</h1>
            <h2>¡Unete a la causa para tener un pa&iacute;s m&aacute;s justo, y colabora con las m&aacute;s de <span id="contador"></span> personas que firmaron tambi&eacute;n!</h2>
        </div>
        
        
        
        <!--DIVISION DEL MAPA-->
        <div id="map" style="width: 500px; height: 370px; background: #cccccc;">
            Map
        </div>
        <!---------------------------------------->
        
        
        
        <a href="<?php echo base_url("T6/Menester"); ?>" class="btn btn-primary">Firma con nosotros</a>
        
        
        
    </div>
    
    
    <script>
        //LLAMADA DEL MAPA
    function initMap(){
        var myLatLng = {lat: 18.7607349, lng: -68.9504396};
        var map = new google.maps.Map(document.getElementById("map"), {zoom: 7, center: myLatLng});
        <?php
            $CI =&get_instance();
            $res = $CI->db->query("select * from firmas where lat != '' and lon != '' order by id desc limit 10;");
        
            $firmas = $res->result();
        
            foreach($firmas as $loc){
                echo "
                    myLatLng = {lat: {$loc->lat}, lng: {$loc->lon}};
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        title: 'Yo firmé'
                    });
                ";
            }
        ?>
    }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaToAUlJh1hrHH2y1zsWOasQyTdHxfdH8&callback=initMap"></script>
    
    
    
    
    
    <!--Contador de firmas-->
    <script>
        var totalFirmas;
    <?php 
            $CI =& get_instance();
            $cont = $CI->db->query("select count(*) as total from firmas;");
            $contFirmas = $cont->result();
            
            foreach($contFirmas as $all){
                echo "totalFirmas = {$all->total};";
            }
        ?>
    document.getElementById("contador").innerHTML = totalFirmas;
    </script>
    
</body>
</html>
