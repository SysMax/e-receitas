            <?php include_once 'navHome.php'; ?>

            <form id="cadUsuarios" class="col s12 m6 l4 hoverable" method="post">
                <fieldset id="informacoes">
                    <legend id="tituloInfo">.:: Dados do Paciente ::.</legend>
                    <div class="row">
                        <div class="input-field col s12 m6 l5">
                            <input type="text" name="usuario" id="usuario" maxlength="80" required >
                            <label for="usuario">Nome do usu&aacute;rio</label>
                        </div>
                        <div class="input-field col s12 m6 l4">
                            <input type="text" name="login" id="login" maxlength="30" required >
                            <label for="login">Nome de Login</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="text" name="cartSUS" id="cartSUS" maxlength="18" required autofocus>
                            <label for="cartSUS">Cart&atilde;o do SUS</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <select>
                                <option selected value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                            <label for="genero">G&ecirc;nero</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="date" name="dtNasc" id="dtNasc" maxlength="10" required>
                            <label for="dtNasc">Dt. Nascimento</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="text" name="cnpf" id="cnpf" maxlength="18" required>
                            <label for="cnpf">CNPF</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="text" name="rg" id="rg" maxlength="30" required>
                            <label for="rg">Identidade</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="text" name="orgaoexp" id="orgaoexp" maxlength="5" required>
                            <label for="orgaoexp">&Oacute;rg&atilde;o</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="date" name="dtExp" id="dtExp" maxlength="10" required>
                            <label for="dtExp">Dt. Emiss&atilde;o</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <select>
                                <optgroup label="Regi&atilde;o Norte">
                                    <option value="AC">Acre</option>
                                    <option value="AP;">Amap&aacute;</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="PA;">Par&aacute;</option>
                                    <option value="RO">Rond&ocirc;nia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="TO">Tocantins</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Nordeste">
                                    <option value="AL">Alagoas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE;">Cear&aacute;</option>
                                    <option value="MA">Maranh&atilde;o</option>
                                    <option value="PB">Para&iacute;ba</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piau&iacute;</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="SE">Sergipe</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Centro-Oeste">
                                    <option selected value="GO">Goi&aacute;s</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Sudeste">
                                    <option value="ES">Esp&iacute;rito Santo</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="SP">S&atilde;o Paulo</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Sul">
                                    <option value="PR">Paran&aacute;</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="SC">Santa Catarina</option>
                                </optgroup>
                            </select>
                            <label>UF</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" name="natural" id="natural" maxlength="40">
                            <label for="natural">Naturalidade</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <select>
                                <optgroup label="Regi&atilde;o Norte">
                                    <option value="AC">Acre</option>
                                    <option value="AP;">Amap&aacute;</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="PA;">Par&aacute;</option>
                                    <option value="RO">Rond&ocirc;nia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="TO">Tocantins</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Nordeste">
                                    <option value="AL">Alagoas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE;">Cear&aacute;</option>
                                    <option value="MA">Maranh&atilde;o</option>
                                    <option value="PB">Para&iacute;ba</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piau&iacute;</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="SE">Sergipe</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Centro-Oeste">
                                    <option selected value="GO">Goi&aacute;s</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Sudeste">
                                    <option value="ES">Esp&iacute;rito Santo</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="SP">S&atilde;o Paulo</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Sul">
                                    <option value="PR">Paran&aacute;</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="SC">Santa Catarina</option>
                                </optgroup>
                            </select>
                            <label>UF</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" name="nPai" id="nPai" maxlength="50">
                            <label for="nPai">Nome do Pai</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" name="nMae" id="nMae" maxlength="50">
                            <label for="nMae">Nome da M&atilde;e</label>
                        </div>
                        <div class="input-field col s12 m6 l5">
                            <input type="text" name="endereco" id="endereco" maxlength="80" required>
                            <label for="endereco">Endere&ccedil;o</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <input type="text" name="numero" id="numero" maxlength="12" required>
                            <label for="numero">N&uacute;mero</label>
                        </div>
                        <div class="input-field col s12 m6 l5">
                            <input type="text" name="complem" id="complem" maxlength="30">
                            <label for="complem">Complemento</label>
                        </div>
                        <div class="input-field col s12 m6 l5">
                            <input type="text" name="bairro" id="bairro" maxlength="30" required>
                            <label for="bairro">Bairro</label>
                        </div>
                        <div class="input-field col s12 m6 l5">
                            <input type="text" name="municipio" id="municipio" maxlength="40" required>
                            <label for="municipio">Munic&iacute;pio</label>
                        </div>
                        <div class="input-field col s12 m6 l2">
                            <select>
                                <optgroup label="Regi&atilde;o Norte">
                                    <option value="AC">Acre</option>
                                    <option value="AP;">Amap&aacute;</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="PA;">Par&aacute;</option>
                                    <option value="RO">Rond&ocirc;nia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="TO">Tocantins</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Nordeste">
                                    <option value="AL">Alagoas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE;">Cear&aacute;</option>
                                    <option value="MA">Maranh&atilde;o</option>
                                    <option value="PB">Para&iacute;ba</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piau&iacute;</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="SE">Sergipe</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Centro-Oeste">
                                    <option selected value="GO">Goi&aacute;s</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Sudeste">
                                    <option value="ES">Esp&iacute;rito Santo</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="SP">S&atilde;o Paulo</option>
                                </optgroup>
                                <optgroup label="Regi&atilde;o Sul">
                                    <option value="PR">Paran&aacute;</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="SC">Santa Catarina</option>
                                </optgroup>
                            </select>
                            <label>UF</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="tel" name="telefone" id="telefone" maxlength="13">
                            <label for="telefone">Telefone</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="tel" name="celular" id="celular" maxlength="14" required>
                            <label for="celular">Celular</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="password" name="senha" id="senha" maxlength="10" required>
                            <label for="senha">Senha</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="password" name="confSenha" id="confSenha" maxlength="10" required>
                            <label for="confSenha">Conf. Senha</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="email" name="email" id="email" maxlength="120">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <textarea class="materialize-textarea" id="obs" maxlength="120" data-length="120"></textarea>
                            <label for="obs">Observa&ccedil;&otilde;es</label>
                        </div>
                    </div>
                </fieldset>
                <div class="input-field responsive">
                    <p class="hoverable" style="width: 200px; height: 45px; padding: 10px; background-color: #F1F1F1;">
                        <label>
                            <input class="with-gap" name="estatus" type="radio" checked />
                            <span style="margin-right: 20px;">Ativo</span>
                        </label>
                        <label>
                            <input class="with-gap" name="estatus" type="radio" />
                            <span>Inativo</span>
                        </label>
                    </p>
                    <a class="waves-effect waves-light btn green"><i class="material-icons left">check_circle</i>Salvar</a>
                    <a class="waves-effect waves-light btn orange darken-4"><i class="material-icons left">cancel</i>Cancelar</a>
                </div>
            </form>