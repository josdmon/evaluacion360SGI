<?php
class Conexion extends mysqli {
    public function __construct(){
        parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        $this->connect_errno ? die('Error en la conexión') : $x = 'Conectado';
        $this->query("SET NAMES 'utf8';");
        
        unset($x);
    }
    //metodos
    public function recorrer($y){
        // Recupera una fila de resultados como un array asociativo, un array numérico o como ambos
        return mysqli_fetch_array($y);
    }
    public function rows($z){
        # Obtiene el número de filas de un resultado
        return mysqli_num_rows($z);
    }
    public function liberar($x){
        /**Libera la memoria asociada al resultado.
        Nota:
        Siempre se debe liberar el resultado con mysqli_free_result(), cuando el objeto del resultado ya no es necesario.**/
        return mysqli_free_result($x);
    }
    public function preparada($t){
        #Inicializa una sentencia y devuelve un objeto para usarlo con mysqli_stmt_prepare.
        return mysqli_stmt_init($t);
    }
    /**public function __destruct(){
        $this->close();
    }**/
}
?>