<?php
//EL CONTROLADOR FUNCIONA INTERVINIENDO ENTRE VISTAS Y MODELOS
Class BootcampController {

    public $bootcamp;

    public function __construct(){
        $this->bootcamp = new Bootcamp();
    }

    public function index(){
        //CONTROLO MODELOS
        $bootcamps = $this->bootcamp->get_bootcamps();

        //CONTROLAR LAS VISTAS
        include './views/bootcampView.php';
    }

    // PETICION POST (ENVIA MENSAJE)
    public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $start_bootcamp = $_POST['start_bootcamp'];
            $end_bootcamp = $_POST['end_bootcamp'];
            $modules = $_POST['modules'];

            $this->bootcamp->add_bootcamp($title, $description, $start_bootcamp, $end_bootcamp, $modules);
        }

        include './views/add_bootcamp.view.php';
    }
 }
?>