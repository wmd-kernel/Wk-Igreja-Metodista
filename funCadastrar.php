<?php include("include/header.php"); ?>
<div id="infoMenu" class="">
    <h2>Cadastrar novo funcionário</h2>
</div>
    <div class="foco">
        <div class="focoEsc">
            <form method="post" action="inde.php" autocomplete="off" class="cadFunc" enctype="multipart/form-data">
                <div class="encFocoEsc1e2 todosInputs">
                    <div class="focoEsc1">
                        <span class="formInputLabel" >
                            Nome completo
                        </span>
                    </div>
                    <div class="focoEsc2">
                        <input type="text" id="nome" name="nome" class="formInputTexto">
                    </div>
                </div>
                <div class="encFocoEsc1e2 todosInputs">
                    <div class="focoEsc1">
                        <span class="formInputLabel" >
                            Palavra-passe
                        </span>
                    </div>
                    <div class="focoEsc2">
                        <input type="text" id="nome" name="nome" class="formInputTexto">
                    </div>
                </div>
                <div class="encFocoEsc1e2 todosInputs">
                    <div class="focoEsc1">
                        <span class="formInputLabel" >
                            Confirma a palavra-passe
                        </span>
                    </div>
                    <div class="focoEsc2">
                        <input type="text" id="nome" name="nome" class="formInputTexto ">
                    </div>
                </div>
            </div>
            <div class="focoDir">
                <div class="focoDir1">
                    <h3>Dados do funcionário</h3>
                </div>
                <div class="focoDir2">
                    <p>
                        Para cadastrar um casamento precisa antes informar  os dados dos padrinhos
                    </p>
                </div>
            </div>
            <div class="botao todosInputs">
                <input class="formInputBtn" type="submit" value="Concluir o cadastro do baptizmo de Batizado">
            </div>
        </form>
    </div>
<?php include("include/footer.php"); ?>