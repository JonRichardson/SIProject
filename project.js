$(document).ready(function(){

  $(function(){
    $("#dropdown1 li").click(function(){
      $("#dropdown1 li").show();
      $(this).closest('.btn-group').find(".btn:first-child").text($(this).text());
      $(this).closest('.btn-group').find(".btn:first-child").val($(this).text());
      $("#dropdown1 li").hide();
    });

    $("#dropdown2 li").click(function(){
      $(this).closest('.btn-group').find(".btn:first-child").text($(this).text());
      $(this).closest('.btn-group').find(".btn:first-child").val($(this).text());
      $("#dropdown2 li").toggle();
    });

    $("#dropdown3 li").click(function(){
      $(this).closest('.btn-group').find(".btn:first-child").text($(this).text());
      $(this).closest('.btn-group').find(".btn:first-child").val($(this).text());
      $("#dropdown3 li").toggle();
    });
  });

});
