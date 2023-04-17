<?php
    // try : Bloque para verificar errores
    try {
        // Si en este bloque se encuentra un error, automaticamente de activa catch
        $db = new PDO('mysql:host=localhost;dbname=consorcio','root','');       
    }
    // catch : Bloque que continua al try. 
    // Exception es una clase $e es un objeto de esta clase
    catch(Exception $e) {
        // Si encuentra error entra aqui
        die($e->getMessage());
    }    
?>