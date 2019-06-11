
$('.hover-cusor').click(function(){
      $('ul.hiddenUl ').toggleClass("showUl");
});
$(".menu-drop-left div").click(function() {
            $(".ul-hihi-left").slideToggle();
            $(".sub-ul-drop-left").css("display", "none");
      });

      $(".ul-hihi-left li").click(function() {
            $(".sub-ul-drop-left").slideUp();
            $(this).find('.sub-ul-drop-left').slideToggle();
      });

      $(window).resize(function() {
            if($(window).width() > 768) {
                  $(".ul-hihi-left").removeAttr('style');
            }
 });


$(".menu-drop-right div").click(function() {
    $(".ul-hihi-right").slideToggle();
});


$(window).resize(function() {
    if($(window).width() > 768) {
          $(".ul-hihi").removeAttr('style');
    }
});

if($(window).width()>990){
$(document).ready(function(){
  var a = window.location.href;
  var b = a.slice(33);
  var c = a.length;
  if(b === 'san-pham'){
    $('.jq-one').removeClass('click-color-menu');
    $('.jq-two').addClass('click-color-menu');
  }
  if(b==='gioi-thieu'){
    $('.jq-one').removeClass('click-color-menu');
    $('.jq-three').addClass('click-color-menu');
  }
  if(b==='lien-he'){
    $('.jq-one').removeClass('click-color-menu');
    $('.jq-four').addClass('click-color-menu');
  }
  if(c>33){
     $('.jq-one').removeClass('click-color-menu');
  }
});
}
let gddd = 0;
$('.li-cha').click(function(){
  if(gddd===0){
    $('.ul-con').show();
    gddd=1 ;
  }else{
    $('.ul-con').hide();
    gddd = 0;  
  }
});
