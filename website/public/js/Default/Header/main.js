
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
  });