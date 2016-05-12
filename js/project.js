$(document).ready(function(){
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

// Function to toggle the chevrons on the newInputPage
  $("#userInput1").click(function(){
    $(".newChevron1").hide("hiddenChevron");
  });

  $("#userInput2").click(function(){
    $(".newChevron2").hide("hiddenChevron");
  });

  $("#userInput3").click(function(){
    $(".newChevron3").hide("hiddenChevron");
  });
});
