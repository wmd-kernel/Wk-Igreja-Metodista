<?php

Class Membro{

    var $id_membro;
    var $nome;
    var $data_nasc;
    var $email;
    var $tel1;
    var $tel2;
    var $conjuje;
    var $biografia;
    var $foto;
    var $cep;
    var $rua;
    var $estado_civ;
    var $categoria;
    var $trabalha;
    var $pai;
    var $mae;
    var $estado;
    var $data_entrada;
    var $data_ini_trab;
    var $genero;
    var $id_cargo;
    var $id_bairro;
    var $id_classe;

    function cadastrar($id_membro, $nome, $data_nasc, $email, $tel1, $tel2, $conjuje, $biografia, $foto, $cep, $rua, $estado_civ, $categoria, $trabalha, $pai, $mae, $estado, $data_entrada, $data_ini_trab, $genero, $id_cargo, $id_bairro, $id_classe)
    {
        echo 'Total: ', $id_membro + $nome + $data_nasc + $email + $tel1 + $tel2 + $conjuje + $biografia + $foto + $cep + $rua + $estado_civ + $categoria + $trabalha + $pai + $mae + $estado + $data_entrada + $data_ini_trab + $genero + $id_cargo + $id_bairro + $id_classe;
    }

}

    
?>