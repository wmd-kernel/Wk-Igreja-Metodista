<?php
    include("Conexao.php");

    class Crud extends Conexao{

        #Preparação das declativas
        private function preparedStatements($Query, $Parametros)
        {
            $this->countParametros($Parametros);
            $this->Crud = $this->connectaDB() ->prepare($Query);

            if($this->Contador > 0){
                for($i = 1; $i <= $this->Contador; $i++){
                    $this->Crud->bindValue($i, $Parametros[$i - 1]);
                }
            }
            $this->Crud->execute();
        }




        #Contador de parametros
        private function countParametros($Parametros)
        {
            $this->Contador = count($Parametros);
        }




        #Inserção na base de dados
        public function insertDB($Tabela, $Condicao, $Parametros)
        {
            $this->preparedStatements("insert into {$Tabela} values ({$Condicao})", $Parametros);
            return $this->Crud;
        }




        #Seleção na base de dados
        public function selectDB($Campos, $Tabela, $Condicao, $Parametros)
        {
            $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}", $Parametros);
            return $this->Crud;
        }
    }
?>