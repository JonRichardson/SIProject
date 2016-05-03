$(document).ready(function(){
  // Function for the dropdown items on the inputPage
    $("#dropdown1 li").click(function(){
      $(this).closest('.btn-group').find(".btn:first-child").text($(this).text());
      $('#dropdown1 li').dropdown('toggle');
    });

    $("#dropdown2 li").click(function(){
      $(this).closest('.btn-group').find(".btn:first-child").text($(this).text());
      $('#dropdown1 li').dropdown('toggle');
    });

    $("#dropdown3 li").click(function(){
      $(this).closest('.btn-group').find(".btn:first-child").text($(this).text());
      $('#dropdown3 li').dropdown('toggle');
    });

  // Function for the infoBubble hover animation on the registration page
  $(".info2").hover(function () {
    $(".info1").slideToggle("slow");
  });

  // Functions for the box fade, text fade, and chevrons rotating on the indexPage
  $("#priorityOne").click(function(){
    $(".greyBox1").toggleClass("fadeOut");
    $(".panelText1").toggleClass("fadeOut");
    $(".chevron1").toggleClass("down");
  });

  $("#priorityTwo").click(function(){
    $(".greyBox2").toggleClass("fadeOut");
    $(".panelText2").toggleClass("fadeOut");
    $(".chevron2").toggleClass("down");
  });

  $("#priorityThree").click(function(){
    $(".greyBox3").toggleClass("fadeOut");
    $(".panelText3").toggleClass("fadeOut");
    $(".chevron3").toggleClass("down");
  });

// The following two scripts are for modifying data in Results Page 2
  $("#overview").click(function () {
    $("#div2").fadeToggle("slow")

  });
  $("#details").click(function () {
    $("#table2").fadeToggle("slow")
  });

  // Function for the doughnut chart on the index2 page
  $(function () {
    var ctx = $("#myChart").get(0).getContext("2d");
  	var data = [
  		{
  			value: 170,
  			color: "#229B47",
  			highlight: "#4D6E43",
  			label: "Tin"
  		},
  		{
  			value: 80,
  			color: "#E9D620",
  			highlight: "#EBB71E",
  			label: "Tungsten"
  		},
      {
  			value: 100,
  			color: "#11B6D0",
  			highlight: "#53C7DE",
  			label: "Tantalum"
  		},
  		{
  			value: 40,
  			color: "#F79123",
  			highlight: "#F26621",
  			label: "Gold"
  		}
  	];
	  var chart = new Chart(ctx).Doughnut(data);
  });
});
