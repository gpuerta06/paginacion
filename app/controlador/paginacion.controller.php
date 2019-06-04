<?php 

require_once 'app/modelo/paginacion.php';

class PaginacionController{

 private $paginacionModelo;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->paginacionModelo = new paginacion();
    }

    //Llamado Login
    public function Index(){
        $articulos = new paginacion();     

              $articulos= $this->paginacionModelo->ObtenerArticulos($articulos);
                    /*$datos = [
                'articulos' => $articulos
                            ];*/
        $articulo_pagina = 3;
        //Contar articulos
        $total_articulo= $this->paginacionModelo->ObtenerTotalArticulos($articulos);
                    
        $paginas = $total_articulo/3;
        $paginas = ceil($paginas);
        
        if (!$_GET) {
            header('location:?c=paginacion&a=Index&pagina=1');
        }
        if ($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0) {
            header('location:?c=paginacion&a=Index&pagina=1');
        }
        $iniciar = ($_GET['pagina']-1) * $articulo_pagina;

        $limit_articulos= $this->paginacionModelo->ObtenerLimitArticulos($iniciar,$articulo_pagina);
         $datos = [
                'articulos' => $limit_articulos
                            ];
        require_once 'app/vista/inc/header.php';
        require_once 'app/vista/paginacion/index.php';
        require_once 'app/vista/inc/footer.php';
    }
   

}

 ?>