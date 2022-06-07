//function button where
$(document).ready(function(){
    $(".image_where").click(function(){
      let where =$(this).attr("value");
      $("#navbar_where").val(where);
    });
  });