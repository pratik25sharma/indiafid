function ValidateEmail(email) 
{
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
		return true;
	}else{
		return false;
	}
}
$(document).ready(function(){
  labeljumpcall();
  $('.scrollbar-outer').click();
  $('.menu_slide').click(function(){
      $('.side_bar').addClass('open');
  });
  $('.side_bar').click(function(){
      $(this).removeClass('open');
  });
  $('.side_bar_wrap').click(function(e){
      e.stopPropagation();
  });

  $('.wd_login, .hHead .content').click(function(){
      $('.head_login').fadeIn();
      $('.side_bar').removeClass('open');
  });
  $('.side_ico').click(function(){
      $('.head_login').fadeOut();
  });
  
  $(".shw-hde_password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });

});
/*INPUT LABEL JUMP*/
function labeljump(){
    var bus = $(this).val();
    if (bus.length > 0) {
        $(this).siblings("label").addClass("label-valid");
    } else {
        $(this).siblings("label").removeClass("label-valid");
    }
}
//setInterval(labeljump(), 10);
function labeljumpcall(){
    $(".label_jump").each(labeljump).change(labeljump);
}
/*INPUT LABEL JUMP*/

$('#otpForm input[type=tel]:first-child').focus();
$('#otpForm input[type=tel]').keyup(function (e) {
    if ($(this).val().length > 0)
    {
        $(this).next().focus();
    }
    else if (e.keyCode == 8)
    {
        $(this).prev().focus();
    }
    else {
        $(this).focus();
    }
});