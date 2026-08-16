function fnValidacao(event){
    
    const campoNome = document.getElementById("NomeCompleto");    
    if(campoNome){
        let nomeCompleto = campoNome.value.trim();

        if(nomeCompleto.length >=50 || nomeCompleto.length <5 || nomeCompleto ===""){
                //event.preventDefault();
            exibirErro(campoNome, "Atenção: É obrigatório preenchimento."+
            "\n Atenção: Não pode haver menos que 5 caracteres." +
            "\n Atenção: Não pode haver mais  que 50 caracteres.", event);
            return false;
        }
        if (nomeCompleto.split(' ').length < 2)
        {
                //alert('O nome completo deve conter pelo menos O campo Nome Completo é obrigatório e não pode ficar vazio. sobrenome')
               //campoNome.value="";
                //campoNome.focus();
        exibirErro(campoNome, "Atenção: O nome  deve conter pelo menos um sobrenome.", event);
            return false;
        }

            //equivalente o Any do C# 
        const Temnumero = [...nomeCompleto].some(char => char >='0' && char <='9');

        if(Temnumero){
            exibirErro(campoNome, "Atenção: Numeros  não são permitidos.", event);
            return false;

        }
                    //nao tem o ANY para pontuacao entao teve que usar o REGEX
        const temSimboloOuPontuacao = [...nomeCompleto].some(char => /[^\w\s]/.test(char));
        if (temSimboloOuPontuacao){
            exibirErro(campoNome, "Atenção: Caracteres especiais e pontuação não são permitidos.", event);
            return false;
        } 
        limparErro(campoNome); 

        const campoRegistro = document.getElementById("NumerodeRegistro")
        let  numerodeRegistro = campoRegistro.value.trim();
        
        const regeDuracao = /^\d+$/

        if(!regeDuracao.test(numerodeRegistro) || numerodeRegistro =="" || parseInt(numerodeRegistro) <= 0 ){
            exibirErro(campoRegistro,"Atenção: Informe um numero inteiro maior que 0",event);
            return false;
        }
        limparErro(campoRegistro)
        
        const campoPermisao  = document.getElementById("NiveldePermisao")
        let niveldePermisao  = campoPermisao.value.trim();

        if(niveldePermisao ===""){
            exibirErro(campoPermisao,"Atenção: O campo Permisao precisa ser preenchido",event);
            return false;
        }
        
        limparErro(campoPermisao);
        
        const campoNomeUsuario = document.getElementById("nome_de_usuario")
        let UsuarioRestrito = campoNomeUsuario.value.trim();

        if( UsuarioRestrito ===""){
            exibirErro(campoNomeUsuario,"Ateção: O campo precisa ser preenchido",event);
            return false;
        }

        const pontuacao = [...UsuarioRestrito ].some(char => /[^\w\s]/.test(char) );
        if(pontuacao){
            exibirErro(campoNomeUsuario,"Atenção: caracteres especiais e pontuação não são permitidos.",event);
            return false;
        }

        limparErro(campoNomeUsuario);
            
        const regexSenhaForte = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        const campoSenha = document.getElementById("SenhadeAcesso");
        let SenhadeAcesso = campoSenha.value.trim();
            
            
        if( !regexSenhaForte.test(SenhadeAcesso) || SenhadeAcesso ===""){
            exibirErro( campoSenha,"Atenção: A senha deve ter no mínimo 8 caracteres, incluindo letras maiúsculas, minúsculas, números e pelo menos um caractere especial (ex: @, $, !, %, *, ?, &).",event);
            return false;
        }

        limparErro(campoSenha);

        const campoConfirmasenha = document.getElementById("ConfirmarSenhadeAcesso");
        if(campoConfirmasenha){
            let ConfirmarSenhadeAcesso = campoConfirmasenha.value.trim();
            if(ConfirmarSenhadeAcesso !=SenhadeAcesso){
                exibirErro(campoConfirmasenha,"Atenção: A senha nao bate.",event);
                return false;
            }
        }  
        limparErro(campoConfirmasenha);

    }  
    return true;
}

function exibirErro(campo, mensagem,event) {
    event.preventDefault();
    campo.focus();
    campo.classList.add('is-invalid'); // Adiciona borda vermelha no input
    alert(mensagem);
    
}

function limparErro(campo) {
    campo.classList.remove('is-invalid'); // Desliga a borda vermelha
}

       


function fnValidacaoB(event){
    const campoNome = document.getElementById("NomeCompleto");    
    if(campoNome){
        let nomeCompleto = campoNome.value.trim();

        if(nomeCompleto.length >=50 || nomeCompleto.length <5 || nomeCompleto ===""){
                //event.preventDefault();
            exibirErro(campoNome, "Atenção: É obrigatório preenchimento."+
            "\n Atenção: Não pode haver menos que 5 caracteres." +
            "\n Atenção: Não pode haver mais  que 50 caracteres.", event);
            return false;
        }
        if(nomeCompleto.split(' ').length < 2){
                //alert('O nome completo deve conter pelo menos O campo Nome Completo é obrigatório e não pode ficar vazio. sobrenome')
               //campoNome.value="";
                //campoNome.focus();
            exibirErro(campoNome, "Atenção: O nome  deve conter pelo menos um sobrenome.", event);
            return false;
        }

            //equivalente o Any do C# 
        const Temnumero = [...nomeCompleto].some(char => char >='0' && char <='9');

        if(Temnumero){
            exibirErro(campoNome, "Atenção: Numeros  não são permitidos.", event);
            return false;

        }
        //nao tem o ANY para pontuacao entao teve que usar o REGEX
        const temSimboloOuPontuacao = [...nomeCompleto].some(char => /[^\w\s]/.test(char));
        if (temSimboloOuPontuacao){
            exibirErro(campoNome, "Atenção: Caracteres especiais e pontuação não são permitidos.", event);
            return false;
        } 
        limparErro(campoNome); 

    }

        const campoPermisao  = document.getElementById("NiveldePermisao")
        let niveldePermisao  = campoPermisao.value.trim();

        if(   niveldePermisao ===""){
            exibirErro(campoPermisao,"Atenção: O campo Permisao precisa ser preenchido",event);
                               
            return false;
        }

        limparErro(campoPermisao);
            
        const campoNomeUsuario = document.getElementById("nome_de_usuario")
        let UsuarioRestrito = campoNomeUsuario.value.trim();

        if( UsuarioRestrito ===""){
            exibirErro(campoNomeUsuario,"Ateção: O campo precisa ser preenchido",event);
            return false;
        }

        const pontuacao = [...UsuarioRestrito ].some(char => /[^\w\s]/.test(char) );
        if(pontuacao){
            exibirErro(campoNomeUsuario,"Atenção: caracteres especiais e pontuação não são permitidos.",event);
            return false;
        }

        limparErro(campoNomeUsuario);

        const regexSenhaForte = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        const campoSenha = document.getElementById("SenhadeAcesso");
        let SenhadeAcesso = campoSenha.value.trim();
        
        if( !regexSenhaForte.test(SenhadeAcesso) || SenhadeAcesso ===""){   
            exibirErro( campoSenha,"Atenção: A senha deve ter no mínimo 8 caracteres, incluindo letras maiúsculas, minúsculas, números e pelo menos um caractere especial (ex: @, $, !, %, *, ?, &).",event)
            return false;
        }

        limparErro(campoSenha);

        const campoConfirmasenha = document.getElementById("ConfirmarSenhadeAcesso");
        if(campoConfirmasenha){
            let ConfirmarSenhadeAcesso = campoConfirmasenha.value.trim();
            if(ConfirmarSenhadeAcesso !=SenhadeAcesso){
                exibirErro(campoConfirmasenha,"Atenção: A senha nao bate.",event);
                   return false;
            }
        }  
        limparErro(campoConfirmasenha);

        const campo_data = document.getElementById('data');
        let hoje = new  Date();

        hoje.setHours(0,0,0,0);
         if(campo_data ){
            let data = campo_data.value.trim();

            if( data ===""){
                exibirErro(campo_data,"Atenção: Informe a data de Alteração.",event);
                return false;
            }
        
            let dataescolhida = new Date(data +"T00:00:00");
            if(dataescolhida < hoje){
                exibirErro(campo_data,"Atenção: Não é Permitido Data Retroativa .",event);
                return false;
            }

            if(dataescolhida>hoje){
                exibirErro(campo_data,"Atenção: Não é Permitido Data Futura .",event);
                return false;
            }
        }
        limparErro(campo_data);

        function exibirErro(campo, mensagem,event) {
        event.preventDefault();
        campo.focus();
        campo.classList.add('is-invalid'); // Adiciona borda vermelha no input
        alert(mensagem);
    
    }
        function limparErro(campo) {
        campo.classList.remove('is-invalid'); // Desliga a borda vermelha
    }

    return true;

}

function validacaoc(){
    const campoNome = document.getElementById("NomeCompleto");    
    if(campoNome){
        let nomeCompleto = campoNome.value.trim();
        if(nomeCompleto.length >=50 || nomeCompleto.length <5 || nomeCompleto ===""){
            exibirErro(campoNome, "Atenção: É obrigatório preenchimento."+
            "\n Atenção: Não pode haver menos que 5 caracteres." +
            "\n Atenção: Não pode haver mais  que 50 caracteres.", event);
            return false;
        }
        if (nomeCompleto.split(' ').length < 2){
            exibirErro(campoNome, "Atenção: O nome  deve conter pelo menos um sobrenome.", event);
            return false;
        }
        const Temnumero = [...nomeCompleto].some(char => char >='0' && char <='9');
        if(Temnumero){
            exibirErro(campoNome, "Atenção: Numeros  não são permitidos.", event);
            return false;
        }
        
        const temSimboloOuPontuacao = [...nomeCompleto].some(char => /[^\w\s]/.test(char));
        if (temSimboloOuPontuacao){
            exibirErro(campoNome, "Atenção: Caracteres especiais e pontuação não são permitidos.", event);
            return false;
        } 

        limparErro(campoNome); 

    }
    const campoNomeUsuario = document.getElementById("nome_de_usuario")
    let UsuarioRestrito = campoNomeUsuario.value.trim();
    if( UsuarioRestrito ===""){
        exibirErro(campoNomeUsuario,"Ateção: O campo precisa ser preenchido",event);
                              
        return false;
    }
    const pontuacao = [...UsuarioRestrito ].some(char => /[^\w\s]/.test(char) );
    if(pontuacao){
        exibirErro(campoNomeUsuario,"Atenção: caracteres especiais e pontuação não são permitidos.",event);
        return false;
    }
    limparErro(campoNomeUsuario);
    const regexSenhaForte = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    const campoSenha = document.getElementById("SenhadeAcesso");
    let SenhadeAcesso = campoSenha.value.trim();
    if( !regexSenhaForte.test(SenhadeAcesso) || SenhadeAcesso ===""){   
        exibirErro( campoSenha,"Atenção: A senha deve ter no mínimo 8 caracteres, incluindo letras maiúsculas, minúsculas, números e pelo menos um caractere especial (ex: @, $, !, %, *, ?, &).",event)
        return false;
    }

    limparErro(campoSenha);

    return true;
    
}

let formulario_modificado = false;

// 2. O navegador localiza seu formulário na tela
const formulario_da_pagina = document.querySelector('form');

// 3. Sensor nativo ativado caso o usuário altere qualquer dado ou digite
if (formulario_da_pagina) {
    formulario_da_pagina.addEventListener('change', function() {
        formulario_modificado = true; 
    });
}
if(formulario_da_pagina){
    formulario_da_pagina.addEventListener('input', function() {
        formulario_modificado = true; 
    });
}






// 4. Captura os links normais do seu menu (Menu e Estoque Entrada que usam a classe 'le')
const links_do_menu = document.querySelectorAll('.link-alerta');

// 5. Para cada link normal, adiciona o aviso antes de mudar de aba
links_do_menu.forEach(function(link_atual) {
    link_atual.addEventListener('click', function(evento_do_clique) {
        
        // Se houve modificação na tela, o confirm entra em ação
        if (formulario_modificado) {
            let usuario_quer_sair = confirm("Você possui alterações não salvas. Tem certeza que deseja sair?");
            
            // Se clicar em Cancelar, cancela a navegação
            if (!usuario_quer_sair) {
                evento_do_clique.preventDefault();
            }
        }
    });
});
        
