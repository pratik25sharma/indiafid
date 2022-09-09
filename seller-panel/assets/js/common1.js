function ValidateEmail(email) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return true;
  }else{
    return false;
  }
}


	$(document).ready(function (e) {
		            
$("#submit").on('click',(function(e) {
						$(".popup_overlay .alert").remove();
				var isValid = true;

e.preventDefault();
$(".error").remove();


	var otp = ($('input[name="otp"]').val());
       if (otp  == '') {		   				isValid = false;

		   $("#otp").addClass('has-error');

	$("#otp").after('<span class="error">Please fill this box</span>');
	  }
	else{
			   $("#otp").removeClass('has-error');
	}
	  

	
	if(isValid){
$.ajax({
			url:SITE_URL+"/ajax/registerwith_ajax.php",
			type: "POST",
			data:$("#form1").serialize(),
			success: function(response){
			
			var obj = $.parseJSON(response); 
				if(obj.status){						
						

			$(".popup_overlay form").before('<div class="alert alert-success">' +obj.message+'  </div>');
		$(".popup_overlay").hide(5000);
		}else{
			$(".popup_overlay form").before('<div class="alert alert-danger">'+obj.message+'</div>');
		}				
			
		
				
				}
				
			        
		});
	}
        }));
			 
      });
	  
	$(document).ready(function (e){
$(".add_details").on('click',(function(e) {

	e.preventDefault();

	$.ajax({
			url:SITE_URL+"/ajax/bussiness_form_ajax.php",
		type: "POST",            
		data: new FormData(this), 
		contentType: false,      
		cache: false,           
		processData:false,       
		success: function(response){
			$(".popup_box").replaceWith(response);
			
			
				
			}
	});

}));
					 
});

$(document).ready(function (e){
	$(document.body).on('submit',"#bussiness_form_update",(function(e){

		$(".popup_overlay .alert").remove();
	e.preventDefault();

$.ajax({
			url:SITE_URL+"/ajax/bussiness_update_ajax.php",
		type: "POST",            
		data: new FormData(this), 
		contentType: false,      
		cache: false,           
		processData:false,       
		success: function(response){
			
			var obj = $.parseJSON(response); 
				if(obj.status){						
						

			$(".popup_overlay form").before('<div class="alert alert-success">' +obj.message+'  </div>');
			
		$(".popup_overlay").hide(5000);


		}else{
			$(".popup_overlay form").before('<div class="alert alert-danger">'+obj.message+'</div>');
		}				
		
				
			}
	});

}));
					 
});
$(document).ready(function (e){
$(".bank_details").on('click',(function(e) {

	e.preventDefault();

	$.ajax({
			url:SITE_URL+"/ajax/bank_form_ajax.php",
		type: "POST",            
		data: new FormData(this), 
		contentType: false,      
		cache: false,           
		processData:false,       
		success: function(response){
			$(".popup_box").replaceWith(response);
			
			
				
			}
	});

}));
					 
});

$(document).ready(function (e){
$(document.body).on('submit',"#bank_form_update",(function(e){
	e.preventDefault();
			$(".popup_overlay .alert").remove();

	$.ajax({
			url:SITE_URL+"/ajax/bank_update_ajax.php",
		type: "POST",            
		data: new FormData(this), 
		contentType: false,      
		cache: false,           
		processData:false,       
		success: function(response){
			
					
			var obj = $.parseJSON(response); 
				if(obj.status){						
						

			$(".popup_overlay form").before('<div class="alert alert-success">' +obj.message+'  </div>');
		$(".popup_overlay").hide(5000);
		}else{
			$(".popup_overlay form").before('<div class="alert alert-danger">'+obj.message+'</div>');
		}				
		
				
				}
	});

}));
					 
});


$(document).ready(function (e){
$(".store").on('click',(function(e) {

	e.preventDefault();

	$.ajax({
			url:SITE_URL+"/ajax/store_details_ajax.php",
		type: "POST",            
		data: new FormData(this), 
		contentType: false,      
		cache: false,           
		processData:false,       
		success: function(response){
			$(".popup_box").replaceWith(response);
			
			
				
			}
	});

}));
					 
});

$(document).ready(function (e){
$(document.body).on('submit',"#store_form_update",(function(e){
	e.preventDefault();
		$(".popup_overlay .alert").remove();

	$.ajax({
			url:SITE_URL+"/ajax/store_details_form_update.php",
		type: "POST",            
		data: new FormData(this), 
		contentType: false,      
		cache: false,           
		processData:false,       
		success: function(response){
						
			var obj = $.parseJSON(response); 
				if(obj.status){						
						

			$(".popup_overlay form").before('<div class="alert alert-success">' +obj.message+'  </div>');
		$(".popup_overlay").hide(5000);
		}else{
			$(".popup_overlay form").before('<div class="alert alert-danger">'+obj.message+'</div>');
		}				
		
				
				}
	});

}));
					 
});

	$(document).ready(function (e) {
		            
$(".otp").on('click',(function(e) {
						$(".popup_overlay .alert").remove();

			var isValid = true;

e.preventDefault();
$(".error").remove();
 //$('input[type="text"]').attr('readonly', true); 
//$('input[type="password"]').attr('readonly', true);

var email = ($('input[name="email"]').val());
		
       if (email  == '') {
		   				isValid = false;

	    $("#email").addClass('has-error');

	$("#email").after('<span class="error">Please fill this box</span>');
      
      }
	  else if(!ValidateEmail($('input[name="email"]').val())){
						   				isValid = false;

					$("#email").after("<span class='error'>Invalid Email</span>");
				}
	  else{
				   	    $("#email").removeClass('has-error');

	}
				
	var mobile = ($('input[name="mobile"]').val());
       if (mobile  == '') {		   				isValid = false;

		   	    $("#mobile").addClass('has-error');

	$("#mobile").after('<span class="error">Please fill this box</span>');
    }else{
				   	    $("#mobile").removeClass('has-error');

	}
	var password = ($('input[name="password"]').val());
       if (password  == '') {		   				isValid = false;

		   $("#password").addClass('has-error');

	$("#password").after('<span class="error">Please fill this box</span>');
	  }
	else{
			   $("#password").removeClass('has-error');
	}
	  


	
	if(isValid){

	$.ajax({
			url:SITE_URL+"/ajax/otp_ajax.php",
			type: "POST",
			data:$("#form1").serialize(),
			success: function(response){
				var obj = $.parseJSON(response); 
				console.log(response);

				if(obj.status){						
						

			$(".popup_overlay form").before('<div class="alert alert-success">' +obj.message+'  </div>');
		//$(".popup_overlay").hide(5000);
		$(".otp").hide();
		$(".signup").show();
		
		} else {
			if(obj.message.email){
		$("#email").after('<div class="alert alert-danger">' +obj.message.email+'</div>');
				//console.log(obj.message.email);

		}
		if(obj.message.mobile){
		$("#mobile").after('<div class="alert alert-danger">' +obj.message.mobile+'</div>');
				console.log(obj.message.mobile);

	
		}
		}	
		}
				
			        
		});
	
		
		
	}
        }));
			 
      });
	
$(document).ready(function (e){
	$("#login_form").on('submit',(function(e) {
		   				isValid = true;
		$(".login_form .alert").remove();

e.preventDefault();
$(".error").remove();

var username = ($('input[name="username"]').val());
		
       if (username  == '') {
		   				isValid = false;

	$("#username").parent().after('<span class="error">Please fill this box</span>');
      
      }
	 
	  var password = ($('#pswrd').val());
       if (password  == '') {
		   				isValid = false;

	$("#pswrd").parent().after('<span class="error">Please fill this box</span>');
      }  


	 
	 if(isValid){
	$.ajax({
			url:SITE_URL+"/ajax/login_ajax.php",
		type: "POST",            
		data: new FormData(this), 
		contentType: false,      
		cache: false,           
		processData:false,       
		success: function(response){
			
						var obj = $.parseJSON(response); 

					//alert(response);
				if(obj.status){						

    window.location.href=obj.message;               
//$(".popup_overlay").fadeIn();

			   }	
				   else{
					   
			$("#username").parent().after('<div class="alert alert-danger">'+obj.message+'</div>');
			
			   }		
		}
				
	});
	}
}));
					 
});
$(document).ready(function (e){
	labeljumpcall();
	$(".popup_overlay").fadeIn();
 	$('.popup_box').addClass('fadeInDown animated');
});

/*INPUT LABEL JUMP*/
function labeljump(){
	alert('asdasd');
    var bus = $(this).val();
    if (bus.length > 0) {
    	alert('hii');
        $(this).siblings("label").addClass("label-valid");
    } else {
        $(this).siblings("label").removeClass("label-valid");
    }
}
setInterval(labeljump(), 10);
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
	
$(document).ready(function(){

    $(".save").on('click',function(){

  var id = $(this).data("id");


		$.ajax({

url: SITE_URL+"/ajax/select_categories_ajax.php", 

method:'post',

data:{cat_id:id},

success: function(result){

alert("save");
}
});
});

});