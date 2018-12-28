            <?php include_once 'navHome.php'; ?>

            <form id="cadMedicamentos" class="col s12 m6 l4 hoverable" method="post">
                <fieldset id="informacoes">
                    <legend id="tituloInfo">.:: Dados do Medicamento ::.</legend>
                    <div class="row">
                        <div class="input-field col s12 m6 l4">
                            <input type="text" name="classe" id="classe" maxlength="30" required autofocus>
                            <label for="classe">Classe do medicamento</label>
                        </div>
                        <div class="input-field col s12 m6 l8">
                            <input type="text" name="medicamento" id="medicamento" maxlength="80" required>
                            <label for="medicamento">Nome do medicamento</label>
                        </div>
                        <div class="input-field col s12 m6 l4">
                            <input type="text" name="registro" id="registro" maxlength="30" required>
                            <label for="registro">Registro no MS</label>
                        </div>
                        <div class="input-field col s12 m6 l8">
                            <input type="text" name="fabricante" id="fabricante" maxlength="80" required>
                            <label for="fabricante">Nome do fabricante</label>
                        </div>
                        <div class="input-field col s12 m6 l4">
                            <input type="text" name="principio" id="principio" maxlength="40" required>
                            <label for="principio">Princ&iacute;pio ativo</label>
                        </div>
                        <div class="input-field col s12 m6 l4">
                            <input type="text" name="unidade" id="unidade" maxlength="10" required>
                            <label for="unidade">Unidade</label>
                        </div>
                        <div class="input-field col s12 m6 l4">
                            <input type="text" name="quantidade" id="quantidade" maxlength="4" required>
                            <label for="quantidade">Quantidade</label>
                        </div>
                        <div class="input-field col s12 m6 l12">
                            <textarea class="materialize-textarea" id="obs" maxlength="120" data-length="120"></textarea>
                            <label for="obs">Observa&ccedil;&otilde;es</label>
                        </div>
                    </div>
                </fieldset>
                <div class="input-field responsive">
                    <a class="waves-effect waves-light btn green"><i class="material-icons left">check_circle</i>Salvar</a>
                    <a class="waves-effect waves-light btn  orange darken-4"><i class="material-icons left">cancel</i>Cancelar</a>
                </div>
            </form>