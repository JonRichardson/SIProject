$(document).ready(function(){

  $(function(){
    $("#dropdown1 li").click(function(){
      $("#dropdown1 li").show();
      $(this).closest('.btn-group').find(".btn:first-child").text($(this).text());
      $(this).closest('.btn-group').find(".btn:first-child").val($(this).text());
      $('#dropdown1 li').dropdown('toggle');
    });

    $("#dropdown2 li").click(function(){
      $(this).closest('.btn-group').find(".btn:first-child").text($(this).text());
      $(this).closest('.btn-group').find(".btn:first-child").val($(this).text());
      $('#dropdown1 li').dropdown('toggle');
    });

    $("#dropdown3 li").click(function(){
      $(this).closest('.btn-group').find(".btn:first-child").text($(this).text());
      $(this).closest('.btn-group').find(".btn:first-child").val($(this).text());
      $('#dropdown3 li').dropdown('toggle');
    });
  });

  $(".monster2").hover(function () {
  $(".monster1").slideToggle("slow");
  });

});
