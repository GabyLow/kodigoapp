<?php
   // Vamos a definir como viene y como luce mi información

   class Bootcamp{
       private $conn;

       public function __construct(){
           $this->conn = new mysqli("127.0.0.1", 'root', '', 'kodigoapp');
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