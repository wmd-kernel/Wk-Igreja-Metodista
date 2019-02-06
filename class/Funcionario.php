<?php

    include("../db/Crud.php");

    Class Funcionario 
    {
        public $id_funcionario;
        public $id_membro;
        public $data_fun;
        public $senha;
        public $estado;
        public $data_add;
        public $id_func;

        public function cadastrar()
        {
            $Crud = new Crud();
            $Crud ->insertDB(
                "tb_funcionario",
                "?,?,?,?,?,?,?",
                array(
                    $this->id_funcionario,
                    $this->id_membro,
                    $this->data_fun,
                    $this->senha,
                    $this->estado,
                    $this->data_add,
                    $this->id_func
                )
            );

        }

        function logar($id_funcionario, $senha)
        {

        }
        
    }
    
?>