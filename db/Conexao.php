<?php
    abstract class Conexao{

        protected function conectaDB()
        {
            try{
                $cn = new PDO("mysql:host=localhost; dbname=bd_igreja_metodista", "root", "");
                return $cn;

            }catch(PDOException $erro){
                return $erro->getMessage();
            }
        }
    }
?>