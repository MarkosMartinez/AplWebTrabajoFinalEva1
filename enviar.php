<?php
file_put_contents("valoraciones.txt", "Movil: " . $_POST["movil"]. "," . " Nombre: " . $_POST['nombre']. " y " . "Valoracion: " . $_POST['estrellas'] . " / 5" . "\n", FILE_APPEND);
echo "<script>
                alert('Valoracion enviada correctamente.');
                window.location= './index.html'
    </script>";
exit();