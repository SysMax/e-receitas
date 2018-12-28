            <?php include_once 'navHome.php'; ?>

            <form id="cadRecEspecial" class="col s12 m6 l4 hoverable" method="post">
                <fieldset id="informacoes">
                    <legend id="tituloInfo">.:: Dados da Receita Especial ::.</legend>
                    <div class="row">
                        <div class="input-field col s12 m6 l3">
                            <input type="text" name="cartSUS" id="cartSUS" maxlength="18" required autofocus>
                            <label for="cartSUS">Cart&atilde;o do SUS</label>
                        </div>
                        <div class="input-field col s12 m6 l8">
                            <input type="text" name="recPaciente" id="recPaciente" maxlength="80" required >
                            <label for="recPaciente">Nome do Paciente</label>
                        </div>
                        <div class="input-field responsive col s12 m6 l1">
                            <a class="waves-effect waves-light btn green"><i class="material-icons small" title="Buscar pacientes...">search</i></a>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" name="nMedicamento" id="nMedicamento" maxlength="80" required>
                            <label for="nMedicamento">Nome do Medicamento</label>
                        </div>
                        <div class="input-field responsive col s12 m6 l1">
                            <a class="waves-effect waves-light btn green"><i class="material-icons small" title="Buscar medicamentos...">search</i></a>
                        </div>
                        <div class="input-field col s12 m6 l5">
                            <textarea class="materialize-textarea" id="posologia" maxlength="120" data-length="120"></textarea>
                            <label for="posologia">Descri&ccedil;&atilde;o da Posologia</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <table class="striped bordered responsive-table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Medicamento utilizado</th>
                                        <th>Posologia do medicamento</th>
                                        <th>Comandos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="" class="btn-floating waves-effect waves-light light-blue">
                                                <i class="material-icons small">edit</i>
                                            </a>
                                            <a href="" class="btn-floating waves-effect waves-light red darken-4">
                                                <i class="material-icons small">delete_sweep</i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>
            </form>