$(document).ready(
  function()
  {
    $(".button-collapse").sideNav({
      menuWidth: 200
    });
  }
);

$("#accordion > li").click(function(){

    if(false == $(this).next().is(':visible')) {
        $('#accordion > ul').slideUp(300);
    }
    $(this).next().slideToggle(300);
});