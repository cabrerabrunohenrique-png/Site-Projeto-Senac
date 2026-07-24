function fnValidacao(event){

    

    const campoNome = document.getElementById("NomeCompleto");    
    if(campoNome){
            let nomeCompleto = campoNome.value.trim();

            if(nomeCompleto.length >=50 || nomeCompleto.length <5 || nomeCompleto ===""){
                //event.preventDefault();
                exibirErro(campoNome, "O campo Nome Completo é obrigatório e não pode ficar vazio."+
                    "\nNão pode ter menos que 5 caracteres." +
                    "\nNão pode ter mais  que 50 caracteres.", event);
                return false;
            }
            if (nomeCompleto.split(' ').length < 2)
            {
                //alert('O nome completo deve conter pelo menos O campo Nome Completo é obrigatório e não pode ficar vazio. sobrenome')
               //campoNome.value="";
                //campoNome.focus();
                exibirErro(campoNome, "O nome completo deve conter pelo menos um sobrenome.", event);
            
                return false;
            }

            //equivalente o Any do C# 
            const Temnumero = [...nomeCompleto].some(char => char >='0' && char <='9');

            if(Temnumero)
            {   exibirErro(campoNome, "O nome completo NAO PODE conter numeros.", event);
                
                
                return false;

            }
                    //nao tem o ANY para pontuacao entao teve que usar o REGEX
            const temSimboloOuPontuacao = [...nomeCompleto].some(char => /[^\w\sÀ-ÿ]/.test(char));

            if (temSimboloOuPontuacao)
            {
                exibirErro(campoNome, "O nome completo NÃO PODE CONTER PONTUAÇÃO.", event);
                return false;
            } 

            limparErro(campoNome); 

            const campoRegistro = document.getElementById("NumerodeRegistro")
            let  numerodeRegistro = campoRegistro.value.trim();
        
            const regeDuracao = /^\d+$/

            if(!regeDuracao.test(numerodeRegistro) || numerodeRegistro =="" || parseInt(numerodeRegistro) <= 0 )
            {   exibirErro(campoRegistro,"Informe um numero inteiro maior que 0",event);
                
                return false;
                

            }

            limparErroE(campoRegistro);

            const campoPermisao  = document.getElementById("NiveldePermisao")
            let niveldePermisao  = campoPermisao.value.trim();

            if(   niveldePermisao ==="")
            {
                exibirErro(campoPermisao,"O campo Permisao precisa ser preenchido",event);
                               
                return false;

            }
            limparErrof(campoPermisao);
            

            const campoNomeUsuario = document.getElementById("nome_de_usuario")
            let UsuarioRestrito = campoNomeUsuario.value.trim();

            if( UsuarioRestrito ==="")
            {
                alert("O campo Usuario precisa ser preenchido")
                campoNomeUsuario.value="";
                campoNomeUsuario.focus();
                return false;
            }


            const regexSenhaForte = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            const campoSenha = document.getElementById("SenhadeAcesso");
            let SenhadeAcesso = campoSenha.value.trim();
            
            
            if( !regexSenhaForte.test(SenhadeAcesso) || SenhadeAcesso ==="")
            {   
                alert("A senha deve ter no mínimo 8 caracteres, incluindo letras maiúsculas, minúsculas, números e pelo menos um caractere especial (ex: @, $, !, %, *, ?, &).")
                campoSenha.value="";
                campoSenha.focus();
                return false;
            }

            const campoConfirmasenha = document.getElementById("ConfirmarSenhadeAcesso");
            if(campoConfirmasenha){
                let ConfirmarSenhadeAcesso = campoConfirmasenha.value.trim();
                if(ConfirmarSenhadeAcesso !=SenhadeAcesso){
                    alert ("A senha nao bate.")
                    campoConfirmasenha.value="";
                    campoSenha.value="";
                    campoSenha.focus();
                    return false;
                }
            }  
        }  
        return true;
    }

    function exibirErro(nomeCompleto, mensagem,event) {
        event.preventDefault();
        nomeCompleto.focus();
        nomeCompleto.classList.add('is-invalid'); // Adiciona borda vermelha no input
        alert(mensagem);
    
    }

    function limparErro(nomeCompleto) {
    nomeCompleto.classList.remove('is-invalid'); // Desliga a borda vermelha
    }

    function codigo(codigo, messagem,event){
        event.preventDefault();
        codigo.focus();
        codigo.classList.add('is-invalid');
        alert(messagem)
    }

    function limparErroE(codigo) {
    codigo.classList.remove('is-invalid'); // Desliga a borda vermelha
    }

    function nivelPermisa(permisaso){
        event.preventDefault();
        permisaso.focus();
        permisaso.classList.add('is-invalid');
        alert(messagem)
    }

     function limparErrof(permisaso) {
    permisaso.classList.remove('is-invalid'); // Desliga a borda vermelha
    }

    


function fnValidacaoB(event){
    
    
    const campoNomeCompleto = document.getElementById("nome_completo");
    if(campoNomeCompleto){
        let AtualizadonomeCompleto =campoNomeCompleto.value.trim();
        if(AtualizadonomeCompleto.length >=50 || AtualizadonomeCompleto.length <5 || AtualizadonomeCompleto ===""){
            event.preventDefault();
            alert('O campo NOME COMPLETO nao pode ficar FICAR VAZIO.\nNão pode ter menos que 6 caracteres.\nNão pode conter mais de 50 caracteres')
            campoNomeCompleto.focus();
            campoNomeCompleto.value="";
            return false;
        }
        if (AtualizadonomeCompleto.split(' ').length < 2){
            event.preventDefault();
            alert('O nome completo deve conter pelo menos um sobrenome')
            campoNomeCompleto.value="";
            campoNomeCompleto.focus();
            return false;
        }
        const Temnumero = [...AtualizadonomeCompleto].some(char => char >='0' && char <='9');
        if(Temnumero){
            event.preventDefault();
            alert('O nome completo nao pode ter numeros')
            campoNomeCompleto.value="";
            campoNomeCompleto.focus();
            return false;

        }
        const temSimboloOuPontuacao = [...AtualizadonomeCompleto].some(char => /[^\w\sÀ-ÿ]/.test(char));
        if (temSimboloOuPontuacao){
            event.preventDefault();
            alert("O nome completo não pode conter símbolos ou pontuação.");
            campoNomeCompleto.value = "";
            campoNomeCompleto.focus();
             return false;
        } 

    }
    const campoNivelPermissao = document.getElementById("nivel_de_permissao");
    if( campoNivelPermissao){
        
        let atualizarnivel = campoNivelPermissao.value.trim();
        if(atualizarnivel ===""){
            event.preventDefault();
            alert("O Campo Nivel de Permissao não pode ficar em branco");
            
            campoNivelPermissao.focus();
            campoNivelPermissao.value="";
            return false;
        }
    }
    const campoNomeUsuario = document.getElementById("nome_de_usuario");
    if(campoNomeUsuario){
        
        let atualizadousuario = campoNomeUsuario.value.trim();
        if(atualizadousuario ==""){
            event.preventDefault();
            alert("O campo nao pode ficar vazio ");
            
            campoNomeUsuario.focus();
            campoNomeUsuario.value="";
            return false;
        }
    }

    const regexSenhaForte = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    const campoAtualizarSenha = document.getElementById("senhade_de_acesso");
    let atualizarsenha = campoAtualizarSenha.value.trim();
    if( !regexSenhaForte.test(atualizarsenha) || atualizarsenha ===""){
        event.preventDefault();
         
        alert("A senha deve ter no mínimo 8 caracteres, incluindo letras maiúsculas, minúsculas, números e pelo menos um caractere especial (ex: @, $, !, %, *, ?, &).");
        campoAtualizarSenha.focus();
        campoAtualizarSenha.value="";
        return false;
    }

   const camposenha_de_acesso = document.getElementById("senha_de_acesso");

    if (camposenha_de_acesso) {
        let ConfirmarSenhadeAcesso = camposenha_de_acesso.value.trim();

        if (ConfirmarSenhadeAcesso === "" || ConfirmarSenhadeAcesso !== atualizarsenha) {
            event.preventDefault(); 
            
            // Mensagem dinâmica para ajudar o usuário
            if (ConfirmarSenhadeAcesso === "") {
                alert("O campo de confirmação de senha não pode ficar vazio.");
                camposenha_de_acesso.focus();
            } else {
                alert("A senha não bate.");
                camposenha_de_acesso.value = "";
                campoAtualizarSenha.value = "";
                campoAtualizarSenha.focus();
            }
            
            return false;
        }
    }
}
        
