<style type="text/css">
    #navWrapper {
        display: none;
    }
    
    #opcoes {
        margin-top: 70px;
        margin-bottom: 70px;
        padding-top: 31px;
        padding-bottom: 30px;
        
    }
    
    #tituloInfo {
        margin-bottom: 60px;
    }
    
    .icoHome {
        width: 163px !important;
        height: 100% !important;
        margin: 10px 5px;
        color: #FFFFFF !important;
        background-image: linear-gradient(to bottom, rgba(0,0,0, .6), rgba(119,143,155, 1)) !important;
        -webkit-border-radius: 5px !important;
        -moz-border-radius: 5px !important;
    }
    
</style>

<section id="opcoes" class="container">
                <h5 id="tituloInfo" class="z-depth-2">Menu de Op&ccedil;&otilde;es</h5>
                <div class="row center">
                    <div class="icoHome col s12 m6 l3 center hoverable waves-effect waves-light">
                        <i class="material-icons medium" title="Cadastro de m&eacute;dicos..."
                           onclick="document.location = '?class=cadMedicos'">local_hospital</i>
                    </div>
                    <div class="icoHome col s12 m6 l3 center hoverable waves-effect waves-light">
                        <i class="material-icons medium" title="Cadastro de medicamentos..."
                           onclick="document.location = '?class=cadMedicamentos'">local_pharmacy</i>
                    </div>
                    <div class="icoHome col s12 m6 l3 center hoverable waves-effect waves-light">
                        <i class="material-icons medium" title="Cadastro de pacientes..."
                           onclick="document.location = '?class=cadPacientes'">assignment_ind</i>
                    </div>
                    <div class="icoHome col s12 m6 l3 center hoverable waves-effect waves-light">
                        <i class="material-icons medium" title="Cadastro de usu&aacute;rios..."
                           onclick="document.location = '?class=cadUsuarios'">face</i>
                    </div>
                    <div class="icoHome col s12 m6 l3 center hoverable waves-effect waves-light">
                        <i class="material-icons medium" title="Receitas m&eacute;dica simples..."
                           onclick="document.location = '?class=cadRecSimples'">receipt</i>
                    </div>
                    <div class="icoHome col s12 m6 l3 center hoverable waves-effect waves-light">
                        <i class="material-icons medium" title="Receitas de controle especial..."
                           onclick="document.location = '?class=cadRecEspecial'">book</i>
                    </div>
                    <div class="icoHome col s12 m6 l3 center hoverable waves-effect waves-light">
                        <i class="material-icons medium" title="Impress&otilde;es de receitas"
                           onclick="document.location = '?class=cadRelatorios'">print</i>
                    </div>
                    <div class="icoHome col s12 m6 l3 center hoverable waves-effect waves-light">
                        <i class="material-icons medium" title="Sobre o sistema..."
                           onclick="document.location = '?class=cadSobre'">live_help</i>
                    </div>
                </div>            
            </section>