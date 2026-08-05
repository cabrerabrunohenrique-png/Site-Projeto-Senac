
function exibirErro(campo, mensagem,event) {
    event.preventDefault();
    campo.focus();
    campo.classList.add('is-invalid'); // Adiciona borda vermelha no input
    alert(mensagem);
}

function limparErro(campo) {
    campo.classList.remove('is-invalid'); // Desliga a borda vermelha
}

function fnproduto(event){
    const campo_data = document.getElementById('data')
    if(campo_data){
        let texto_data = campo_data.value.trim();
        if(texto_data ==""){
            exibirErro(campo_data,"Atenção: Informa a data",event);    
            return false;
        }

    }

    limparErro(campo_data);

    
    const campo_codigo_do_produto = document.getElementById("codigo_do_produto")
    
    let  texte_codigo_do_produto = campo_codigo_do_produto.value.trim();
    const regeDuracao = /^\d+$/
    if(!regeDuracao.test(texte_codigo_do_produto) || texte_codigo_do_produto =="" || parseInt(texte_codigo_do_produto) <= 0 ){
        exibirErro(campo_codigo_do_produto,"Atenção: Informe um codigo novo.\n Atenção: O codigo tem que ser um numero Positivo",event);
        return false;
    }
    limparErro(campo_codigo_do_produto);

    const campo_fabricante = document.getElementById("fabricante")
    if(campo_fabricante){
        let texto_fabricante = campo_fabricante.value.trim()
        if(texto_fabricante.length >=50 || texto_fabricante.length <4 || texto_fabricante ===""){
            
            exibirErro(campo_fabricante,"Atenção:O Campo FABRICANTE não pode FICAR VAZIO.\nNão pode ter menos que 3 caracteres.\nNao pode conter mais de 50 caracteres",event);
            return false;
        }

        limparErro(campo_fabricante);

        const Temnumero = [...texto_fabricante].some(char => char >='0' && char <='9');

        if(Temnumero){
            exibirErro(campo_fabricante,'Atenção:O Campo FABRICANTE não pode ter numeros',event);
            return false;
        }
        const temSimboloOuPontuacao = [...texto_fabricante].some(char => /[^\w\sÀ-ÿ]/.test(char));
        if (temSimboloOuPontuacao){
            exibirErro(campo_fabricante,"Atenção:O Campo FABRICANTE não pode conter símbolos ou pontuação.",event);
            return false;
        }

        limparErro(campo_fabricante);
            
    }

    const campo_nome_do_produto = document.getElementById("nome_do_produto")

    let texto_nome_do_produto = campo_nome_do_produto.value.trim();
    if(texto_nome_do_produto.length >=50 || texto_nome_do_produto.length <4 || texto_nome_do_produto ===""){
        exibirErro(campo_nome_do_produto,'Atenção:O campo Nome do Produto não pode ficar FICAR VAZIO.\nNão pode ter menos que 3 caracteres.\nNão pode conter mais de 50 caracteres',event);
        return false;
        
    }

    limparErro(campo_nome_do_produto);

    /*const Temnumero = [...texto_nome_do_produto].some(char => char >='0' && char <='9');

    if(Temnumero){ 
        alert('O nome completo nao pode ter numeros')
        campo_nome_do_produto.value="";
        campo_nome_do_produto.focus();
        return false;
    }*/

    const temSimboloOuPontuacao = [...texto_nome_do_produto].some(char => /[^\w\sÀ-ÿ]/.test(char));
    if (temSimboloOuPontuacao){
        exibirErro(campo_nome_do_produto,"O nome completo não pode conter símbolos ou pontuação.",event);
        return false;
    } 

    limparErro(campo_nome_do_produto);
   

    

    const campo_variavel_produto = document.getElementById('varaiveldoproduto')
    if (campo_variavel_produto){
        let texto_variavel_produto = campo_variavel_produto.value.trim();
        if(texto_variavel_produto <=0 || texto_variavel_produto==null){
            exibirErro(campo_variavel_produto,"Atenção:O Campo Variavel do Produto não pode ficar vazio e ser menor que 0",event);
            return false;
        }
    }

    limparErro(campo_variavel_produto);
        
    

    const campo_familia = document.getElementById("familia")
    if(campo_familia){
        let texto_familia = campo_familia.value.trim()
        if(texto_familia.length >=50 || texto_familia.length <4 || texto_familia ===""){
            exibirErro(campo_familia,"Atenção:O Campo FAMILIA nao pode FICAR VAZIO.\nNão pode ter menos que 3 caracteres.\nNao pode conter mais de 50 caracteres",event);
            return false;
        }
        limparErro(campo_familia);

        const Temnumero = [...texto_familia].some(char => char >='0' && char <='9');

        if(Temnumero){ 
            exibirErro(campo_familia,'Atenção:O Campo FAMILIA nao pode ter numeros',event);
            return false;
        }
        limparErro(campo_familia);

        const temSimboloOuPontuacao = [...texto_familia].some(char => /[^\w\sÀ-ÿ]/.test(char));
        if (temSimboloOuPontuacao){
            exibirErro(campo_familia,"Atenção:O Campo FAMILIA não pode conter símbolos ou pontuação.",event);
            return false;
        }
        limparErro(campo_familia); 
            
    }


    const campo_categoria = document.getElementById("categoria")
    if(campo_categoria){
        let texto_categoria = campo_categoria.value.trim()
        if(texto_categoria.length >=50 || texto_categoria.length <4 || texto_categoria ===""){
            exibirErro(campo_categoria,"Atenção:O Campo CATEGORIA nao pode FICAR VAZIO.\nNão pode ter menos que 3 caracteres.\nNao pode conter mais de 50 caracteres",event);
            return false;
        }
        limparErro(campo_categoria);

        const Temnumero = [...texto_categoria].some(char => char >='0' && char <='9');

        if(Temnumero){ 
            exibirErro(campo_categoria,'Atenção:O Campo CATEGORIA não pode ter numeros',event);
            return false;
        }
        limparErro(campo_categoria);
        
        const temSimboloOuPontuacao = [...texto_categoria].some(char => /[^\w\sÀ-ÿ]/.test(char));
        if (temSimboloOuPontuacao){
            exibirErro(campo_categoria,"Atenção:O Campo CATEGORIA não pode conter símbolos ou pontuação.",event);
            return false;
        }
        limparErro(campo_categoria);
            
    }

    const campo_preco = document.getElementById('preco')
    if(campo_preco){
        let texto_categoria = campo_preco.value.trim()
        if(texto_categoria ===""){
            exibirErro(campo_preco,'Atenção:O campo Preço não pode ficar vazio',event);
            return false;   

        }
        limparErro(campo_preco);

        if (texto_categoria < 0 ){
            exibirErro(campo_preco,'Atenção: Informe um valor positivo',event);
            return false;
        }

        limparErro(campo_preco);
    }
    
    const campo_os = document.getElementById('os')
    if(campo_os){
        texto_os = campo_os.value.trim()
        if(texto_os =="" || texto_os <0){
            event.preventDefault();
            alert('O campo nao pode ficar vazio e nao pode ser numero negativo')
            campo_os.value='';
            campo_os.focus();
            return false;
        }
    }

    const campo_tipo = document.getElementById('tipo')
    if(campo_tipo){
        text_tipo = campo_tipo.value.trim();
        if(text_tipo ==""){
            event.preventDefault();
            alert('O campo nao pode ficar vazio')
            campo_tipo.value='';
            campo_tipo.focus();
            return false;
        }
        
    }
  
}