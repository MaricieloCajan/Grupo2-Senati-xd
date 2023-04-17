<?php
    session_start();
    session_destroy();    
    echo '<script>window.location="../vista/iniciar.php"; </script>';
?>