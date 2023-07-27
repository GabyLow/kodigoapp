<?php
//EL CONTROLADOR FUNCIONA INTERVINIENDO ENTRE VISTAS Y MODELOS
Class BootcampController {

    public $bootcamp;

    public function __construct(){
        $this->bootcamp = new Bootcamp();
    }

    public function index(){
        //CONTROLLO MODELOS
        $bootcamps = $this->bootcamp->get_bootcamps();

        //CONTROLAR LAS VISTAS
        include './views/bootcampView.php';
    }
}
?>