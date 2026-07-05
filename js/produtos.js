function fnproduto(event){

    
    const campo_codigo_do_produto = document.getElementById("codigo_do_produto")
    
    let  texte_codigo_do_produto = campo_codigo_do_produto.value.trim();
    const regeDuracao = /^\d+$/
    if(!regeDuracao.test(texte_codigo_do_produto) || texte_codigo_do_produto =="" || parseInt(texte_codigo_do_produto) <= 0 ){
        alert("Informe um numero inteiro maior que 0 ");
        campo_codigo_do_produto.value="";
        campo_codigo_do_produto.focus();
        return false;
    }

    const campo_nome_do_produto = document.getElementById("nome_do_produto")

    let texto_nome_do_produto = campo_nome_do_produto.value.trim();
    if(texto_nome_do_produto.length >=50 || texto_nome_do_produto.length <4 || texto_nome_do_produto ===""){
        event.preventDefault();
        alert('O campo Nome do Produto nao pode ficar FICAR VAZIO.\nNão pode ter menos que 3 caracteres.\nNão pode conter mais de 50 caracteres')
        campo_nome_do_produto.value="";
        campo_nome_do_produto.focus();
      
        return false;
        
    }

    const Temnumero = [...texto_nome_do_produto].some(char => char >='0' && char <='9');

    if(Temnumero){ 
        alert('O nome completo nao pode ter numeros')
        campo_nome_do_produto.value="";
        campo_nome_do_produto.focus();
        return false;
    }

    const temSimboloOuPontuacao = [...texto_nome_do_produto].some(char => /[^\w\sÀ-ÿ]/.test(char));
    if (temSimboloOuPontuacao){
        alert("O nome completo não pode conter símbolos ou pontuação.");
        campo_nome_do_produto.value = "";
        campo_nome_do_produto.focus();
        return false;
    } 

    const campo_fabricante = document.getElementById("fabricante")
    if(campo_fabricante){
        let texto_fabricante = campo_fabricante.value.trim()
        if(texto_fabricante.length >=50 || texto_fabricante.length <4 || texto_fabricante ===""){
            event.preventDefault();
            alert("O Campo FABRICANTE nao pode FICAR VAZIO.\nNão pode ter menos que 3 caracteres.\nNao pode conter mais de 50 caracteres")
            
            campo_fabricante.value="";
            campo_fabricante.focus();
            return false;
        }
        const Temnumero = [...texto_fabricante].some(char => char >='0' && char <='9');

        if(Temnumero){ 
            alert('O nome completo nao pode ter numeros')
            campo_fabricante.value="";
            campo_fabricante.focus();
            return false;
        }
        const temSimboloOuPontuacao = [...texto_fabricante].some(char => /[^\w\sÀ-ÿ]/.test(char));
        if (temSimboloOuPontuacao){
        alert("O nome completo não pode conter símbolos ou pontuação.");
        campo_fabricante.value = "";
        campo_fabricante.focus();
        return false;
    } 
            
    }

  
}