
$(document).ready(function(){
  //function button where
    $(".image_where").click(function(){
      let where =$(this).attr("data-target");
      $("#navbar_where").val(where);
      $('#dropdown-menu-when').dropdown("toggle");
    });


    $(".button_decrease").click(function(){
      
    let target = "#"+$(this).attr("data-target");
    let value = Number($(target).text().trim());
    if(value != 0){
      $(target).text(value-1);
      $('#dropdown-menu-people').dropdown("toggle");
    }
    });
    $(".button_add").click(function(){
      let target = "#"+$(this).attr("data-target");
      let value =  Number($(target).text().trim());
      $(target).text(value+1);
      $('#dropdown-menu-people').dropdown("toggle");
    });

    $(".button-search").click(function(){
        let data = $("#navbar_when").val().trim();
        let checkin = data.substring(6, 10)+"-"+ data.substring(3, 5) +"-"+ data.substring(0, 2);
        let checkout = data.substring(19, 23)+"-" +data.substring(16, 18)+"-"+ data.substring(13, 15);
      let where     = "para_onde="+$("#navbar_where").val().trim()+"&";
      let adults    = "pessoas="+$("#number_adults").text().trim()+ "&";
      let check_in  = "check_in="+checkin+ "&";
      let check_out = "check_out="+checkout;
      let url       = "/?"+where+adults+check_in+check_out;
      window.location.assign(url);
    });

    // functions login
    $("#btn_login_register").click(function(){
      $("#modal_login").modal("hide");
      $("#modal_register").modal("show");
  });

     // functions register
     $("#btn_register_login").click(function(){
      $("#modal_register").modal("hide");
      $("#modal_login").modal("show");
  });
  });
  

  function limpa_formulario_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('road').value=("");
    document.getElementById('district').value=("");
    document.getElementById('city').value=("");
    document.getElementById('state').value=("");
    
}



function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');
//Verifica se campo cep possui valor informado.
if (cep !== "" && cep.length == 8) {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('road').value="...";
        document.getElementById('district').value="...";
        document.getElementById('city').value="...";
        document.getElementById('state').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulario_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    // limpa_formulario_cep();
}
}
function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('road').value=(conteudo.logradouro);
        if(conteudo.district != "" && conteudo.district != undefined) {
          
        }else{
          document.getElementById('district').value=("");
        }
        console.log(conteudo.uf);
        
       

        document.getElementById('state').value=(conteudo.uf);
        document.getElementById('state').dispatchEvent(new Event('change'));
        document.getElementById('city').value=(conteudo.localidade);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulario_cep();
        alert("CEP não encontrado.");
    }
    }
    
function formatar(mascara, documento){
var i = documento.value.length;
var saida = mascara.substring(0,1);
var texto = mascara.substring(i);

if (texto.substring(0,1) != saida){
    documento.value += texto.substring(0,1);
}

}

function idade (){
var data=document.getElementById("dtnasc").value;
var dia=data.substr(0, 2);
var mes=data.substr(3, 2);
var ano=data.substr(6, 4);
var d = new Date();
var ano_atual = d.getFullYear(),
mes_atual = d.getMonth() + 1,
dia_atual = d.getDate();

ano=+ano,
mes=+mes,
dia=+dia;

var idade=ano_atual-ano;

if (mes_atual < mes || mes_atual == mes_aniversario && dia_atual < dia) {
idade--;
}
return idade;
} 

function validarCPF(cpf) {
    // cpf.length == 11;
    cpf = cpf.replace(/[^\d]+/g, '')
    cpf = cpf.replace('.','');
    console.log(cpf);
    if (cpf.length == 11) {
        // Elimina CPFs invalidos conhecidos	
        if (cpf.length != 11 ||
            cpf == "00000000000" ||
            cpf == "11111111111" ||
            cpf == "22222222222" ||
            cpf == "33333333333" ||
            cpf == "44444444444" ||
            cpf == "55555555555" ||
            cpf == "66666666666" ||
            cpf == "77777777777" ||
            cpf == "88888888888" ||
            cpf == "99999999999")
            alert("CPF invalido");

        // Valida 1o digito	
        add = 0;
        for (i = 0; i < 9; i++)
            add += parseInt(cpf.charAt(i)) * (10 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11){
            rev = 0;
        }
        if (rev != parseInt(cpf.charAt(9))){
            alert("CPF invalido");
        return false;
        }
        // Valida 2o digito	
        add = 0;
        for (i = 0; i < 10; i++)
            add += parseInt(cpf.charAt(i)) * (11 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11) {
            rev = 0;
        }
        if (rev != parseInt(cpf.charAt(10))) {
            alert("CPF invalido");
            return false;
        }
        return true;
    }
    
}
        


