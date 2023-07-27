<?php
   // Vamos a definir como viene y como luce mi información
require_once './config.php';
   class Bootcamp{
       private $conn;

       public function __construct(){
           $this->conn = new mysqli('DB_HOST', 'DB_USER', '', 'DB_NAME');
           if ($this->conn->connect_error){
               die("Connection failed: " . $this->conn->connect_error);
           }
           echo 'Connection succesfully';
       }
        
       //OBTIENE TODOS LOS BOOTCAMPS
       public function get_bootcamps(){
        //CREO LA CONSULTA
        $sql = "SELECT * FROM bootcamps";
        //EJECUTO LA CONSULTA
        $result = $this->conn->query($sql);
        $bootcamps = array();
         // TRANSFORMO A UN ARRAY
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $bootcamps[] = $row;
            }
        }

        return $bootcamps;

       } 

   }


?>