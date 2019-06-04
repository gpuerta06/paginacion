<?php
class paginacion
{
	//Atributo para conexión a SGBD
	private $pdo;

//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ObtenerArticulos(){
          
             try
                   {
                        $result = array();

                        $stm = $this->pdo->prepare("SELECT  * FROM articulos");
                        $stm->execute();

                        return $stm->fetchAll(PDO::FETCH_OBJ);
                    }
                    catch(Exception $e)
                    {
                        die($e->getMessage());
                    }

        }
        public function ObtenerTotalArticulos(){
          
             try
                   {
                        $result = array();

                        $stm = $this->pdo->prepare("SELECT  * FROM articulos");
                        $stm->execute();

                        return $stm->rowCount();
                    }
                    catch(Exception $e)
                    {
                        die($e->getMessage());
                    }

        }

        public function ObtenerLimitArticulos($iniciar,$articulo_pagina){
          
             try
                   {
                        $result = array();

                        $stm = $this->pdo->prepare("SELECT  * FROM articulos LIMIT :iniciar,:narticulos");
                        $stm->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
                        $stm->bindParam(':narticulos', $articulo_pagina, PDO::PARAM_INT);
                        $stm->execute();

                        return $stm->fetchAll(PDO::FETCH_OBJ);
                    }
                    catch(Exception $e)
                    {
                        die($e->getMessage());
                    }

        }
 
}


?>