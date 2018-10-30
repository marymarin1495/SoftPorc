<?php 
require_once 'modelo/ingreso.php';
require_once 'modelo/enlaces.php';
require_once  'modelo/empleadoModel.php';
require_once 'controlador/ingreso.php';
require_once 'controlador/template.php';
require_once  'controlador/empleadoController.php';
require_once 'vista/ajax/empleados/obtenerdatos.php';
require_once 'controlador/datos.php';
require_once 'modelo/instalacionModel.php';
require_once 'controlador/instalacionController.php';
require_once 'modelo/porcinoModel.php';
require_once 'controlador/porcinoController.php';
require_once 'controlador/razaController.php';
require_once 'modelo/razaModel.php';
require_once 'controlador/alarmaController.php';
require_once 'modelo/alarmaModel.php';
require_once 'controlador/reproductoraController.php';
require_once 'modelo/reproductoraModel.php';
require_once 'controlador/reproductorController.php';
require_once 'modelo/reproductorModel.php';
require_once 'controlador/articulosController.php';
require_once 'modelo/articulosModel.php';
require_once 'controlador/examenController.php';
require_once 'modelo/examenModel.php';
require_once 'controlador/medicamentoController.php';
require_once 'modelo/medicamentoModel.php';
require_once 'controlador/partoController.php';
require_once 'modelo/partoModel.php';
require_once 'controlador/gestacionController.php';
require_once 'controlador/celoController.php';
require_once 'modelo/celoModel.php';
require_once 'modelo/gestacionModel.php';


$template= new TemplateController();
$template->template();



 ?>

 

