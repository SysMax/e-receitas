<?php if(!class_exists('Rain\Tpl')){exit;}?><style type="text/css">
    #navWrapper {
        display: none !important;
    }
    #txtLogin {
        margin-bottom: 46px;
        color: #6C0B07 !important;
        font-weight: bolder;
        
        text-shadow: 2px 1px 6px rgba(0, 0, 0, 0.6) !important;
        background-image: linear-gradient(to bottom, rgba(50,50,50,.15), rgba(220,223,220,1) 90%,
            rgba(255,255,255, .1) 70%, rgba(114,0,0,1)) !important;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
    }
    .btn {
        margin-top: 25px;
    }
</style>
<form method="post" class="container">
    <div class="row container">
        <div class="col s12 m6 l12">
            <div class="card">
                <div id="txtLogin" class="card-action">
                    <h5 >Login de Usu&aacute;rio</h5>
                </div>
                <div class="input-field col s12 m6 l12">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input type="text" name="usuario" id="usuario" maxlength="30" required autofocus>
                    <label for="nomeMed">Login</label>
                </div>
                <div class="input-field col s12 m6 l12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="senha" id="senha" maxlength="10" required>
                    <label for="senha">Senha</label>
                </div>
                <div class="input-field col s6 m6 l6">
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" />
                            <span>Lembrar-se</span>
                        </label>
                    </p>
                </div>
                <div class="input-field col s6 m6 l6">
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" />
                            <span>Esqueci minha senha</span>
                        </label>
                    </p>
                </div>
                <div class="input-field col s6 m6 l8">
                    <button type="submit" class="btn waves-effect waves-light">Confirmar Login</button>
                </div>
                <div class="input-field col s6 m6 l4">
                    <button type="reset" class="btn waves-effect waves-light red darken-4">Cancelar</button>
                </div>
            </div>

        </div>
    </div>
</form>
