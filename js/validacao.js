function fnValidacao(event){
  
    

    const campoNome = document.getElementById("NomeCompleto");
    let nomeCompleto = campoNome.value.trim();
        
    
    if(nomeCompleto.length >=50 || nomeCompleto.length <5 || nomeCompleto ==="")
    {   
        
        
        alert('O campo NOME COMPLETO nao pode ficar FICAR VAZIO.\nNão pode ter menos que 6 caracteres.\nNão pode conter mais de 50 caracteres')
        
        campoNome.value="";
        campoNome.focus();
        
        
        return false;

    }   

    if (nomeCompleto.split(' ').length < 2)
    {
        
        alert('O nome completo deve conter pelo menos um sobrenome')
        campoNome.value="";
        campoNome.focus();
        
        return false;


    }

       //equivalente o Any do C# 
    const Temnumero = [...nomeCompleto].some(char => char >='0' && char <='9');

    if(Temnumero)
    { 
        alert('O nome completo nao pode ter numeros')
        campoNome.value="";
        campoNome.focus();
        
        return false;

    }
            //nao tem o ANY para pontuacao entao teve que usar o REGEX
    const temSimboloOuPontuacao = [...nomeCompleto].some(char => /[^\w\sÀ-ÿ]/.test(char));

    if (temSimboloOuPontuacao)
    {
        alert("O nome completo não pode conter símbolos ou pontuação.");
        campoNome.value = "";
        campoNome.focus();
        return false;
    } 
    
  

    
    const campoRegistro = document.getElementById("NumerodeRegistro")
    let  numerodeRegistro = campoRegistro.value.trim();
   
    const regeDuracao = /^\d+$/

    if(!regeDuracao.test(numerodeRegistro) || numerodeRegistro =="" || parseInt(numerodeRegistro) <= 0 )
    {
        alert("Informe um numero inteiro maior que 0 ");
        campoRegistro.value="";
        campoRegistro.focus();
        return false;
        ;

    }

   
   const campoPermisao  = document.getElementById("NiveldePermisao")
   let niveldePermisao  = campoPermisao.value.trim();

    if(   niveldePermisao ==="")
    {
        alert("O campo Permisao precisa ser preenchido")
        campoPermisao.value="";
        campoPermisao.focus();
        event.preventDefault();
        return false;

    }

    const campoNomeUsuario = document.getElementById("NomedeUsuario")
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

    const campoConfirmasenha = document.getElementById("ConfirmarSenhadeAcesso")
    let ConfirmarSenhadeAcesso = campoConfirmasenha.value.trim();

    if(ConfirmarSenhadeAcesso !=SenhadeAcesso)
    {
        alert ("A senha nao bate.")
        campoConfirmasenha.value="";
        campoSenha.value="";
        campoSenha.focus();
        return false;
    }

    


     return true;
    }


  
/*  

    const generoPrincipal = document.getElementById("generoPrincipal")
    console.log(generoPrincipal.value)
    if(generoPrincipal.value.trim()=="")
    {
        alert("O campo Genero precisa ser preechido")
        generoPrincipal.focus();
        return;
    }
    

    const classi = document.getElementById("classificacao")

 

    const pai = document.getElementById("paisOrigem")

    if(pai.value.trim() =="")
    {
        alert("O campo Pais Origem precisa ser preenchido")
        pai.focus();
        return;
    }

    const idioma = document.getElementById("idiomaOriginal")
    
    if(idioma.value.trim() =="")
    {
        alert("Falta preencher o campo IDIOMA ORIGINAL");
        idioma.focus();
        return;
    }

    const diretor = document.getElementById("diretor")

    if(diretor.value.trim().length >=150 || diretor.value.trim()=="" || regeDuracao.test(diretor.value.trim()))
    {
        alert("O campo DIRETOR ter mais que 150 carecteres,  nao pode ser só numero e nao pode ficar vazio")
        diretor.value="";
        diretor.focus();
        return;
    }

    const distribuidora = document.getElementById("distribuidora")

    if(distribuidora.value.trim().length >200 || distribuidora.value.trim()=="")
    {
        alert("O campo DISTRIBUIDORA nao pode ter mais de 200 caracters ")
        distribuidora.value="";
        distribuidora.focus();
        return;

    }

    const produtora = document.getElementById("produtora")

    if(produtora.value.trim().length >=200
    || produtora.value.trim()=="")
    {
        alert("O campo PRODUTORA nao pode ter mais que 200 carecteres e nao pode ficar sem preenchimento")
        produtora.value ="";
        produtora.focus();
        return ;

    }
   
   

   

    const regexreal = /^(0,*[1-9]*|[1-9]*(,{1,2})?)$/
    const orcamento = document.getElementById("orcamento")

     if(regexreal.test(orcamento.value.trim()) || orcamento.value.trim()<0)
    {
        alert("Informe um numero inteiro maior que 0 ")
        orcamento.value="";
        orcamento.focus();
        return;

    }

    const receita = document.getElementById("receitaBilheteria")
    
    if(regexreal.test(receita.value.trim()) || receita.value.trim()<0)
    {
        alert("Informe um valor positivo maior que R$0")
        receita.value=="";
        receita.focus();
        return;

    }
 
    
    
    const status = documentgetelementbyid("status")

    if(status.value.trim()=="")
    {   
        alert("O status precisa ser preenchido")
        status.focus()
        return;
    }

    const stre = document.getElementById("streaming")

    if(stre.value.trim() =="")
    {
        alert("O campo Streaming precisa ser preenchido")
        stre.focus
        return;
    }

    
    const notamedia = document.getElementById("notaMedia")

    const nota = parseFloat(notamedia.value.trim().replace(',','.'))
    
    if(isNaN(nota) || nota < 0 || nota >10)
    {
        alert("Informe ")
        return;
    } 


    alert("Estou dentro da funcao  fnValidacao")
    console.log(campoTituloFilme.value)
    
        */

