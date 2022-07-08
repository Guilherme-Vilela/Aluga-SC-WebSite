
$(document).ready(function(){
  //function button where
    $(".image_where").click(function(){
      let where =$(this).attr("data-target");
      $("#navbar_where").val(where);
      $('#dropdown-menu-when').dropdown("toggle");
      console.log("entrei aqui");
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
      let where     = "para_onde="+$("#navbar_where").val().trim()+"&";
      let adults    = "adultos="+$("#number_adults").text().trim()+ "&";
      let children  = "criancas="+$("#number_children").text().trim()+ "&";
      let pet       = "pets=" +$("#number_pets").text().trim()+ "&";
      let check_in  = "check_in="+$("#navbar_when").val().trim()+ "&";
      let check_out = "check_out="+$("#navbar_when").val().trim();
      let url       = "/?"+where+adults+children+pet+check_in+check_out;
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
  