function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  //if(m<0){alert('timer completed')}
  if(m > 0 || s > 0){
    
    //if(m<0){alert('timer completed')}

    document.getElementById('timer').innerHTML =
    m + ":" + s;
	setTimeout(startTimer, 1000);
  }else{
    document.getElementById('timer').innerHTML =
       "";
  }
  
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
$(document).ready(function (e) {
	labeljumpcall();
	$(".otp").on('click',(function(e) {
		$("#timer").remove();
		var isValid = true;
		e.preventDefault();
		var error = '';
		var email = ($('#form1 input[name="email"]').val());
		if (email  == '') {
			isValid = false;
			error += 'Please enter email';
		}else if(!ValidateEmail($('input[name="email"]').val())){
			isValid = false;
			error += 'Invalid Email';
		}
		
		var mobile = ($('#form1 input[name="mobile"]').val());
		if (mobile  == '') {		   				
			isValid = false;
			error += (error != '') ? '<br>' : "";
			error += 'Please enter mobile number';
		}
		var password = ($('#form1 input[name="password"]').val());
		if (password  == '') {		   				
			isValid = false;
			error += (error != '') ? '<br>' : "";
			error += 'Please enter password';
		}
		if(isValid){
			$(".otp_mn").hide();
			$("#email").parents('.inpt_group').hide();
			$("#mobile").parents('.inpt_group').hide();
			$("#password").parents('.inpt_group').hide();
			$(".signup").show();
			$("#otp_mn").show();
			$.ajax({
				url:SITE_URL+"/ajax/otp_ajax.php",
				type: "POST",
				data:$("#form1").serialize(),
				success: function(response){
					var obj = $.parseJSON(response); 
					if(obj.status){			
						toastr.clear();	
						//$(".popup_overlay .signup_form form").before('<div class="alert alert-success">' +obj.message+'  </div>');
						toastr.success(obj.message, "Title", {
							"timeOut": "0",
							"extendedTImeout": "0"
						});
						
						$(".otp").after("<div id='timer'></div>");
						document.getElementById('timer').innerHTML = 05 + ":" + 00;
						startTimer();
					} else {
						if(obj.message.email){
							toastr.error(obj.message.email, "Title");
						}
						if(obj.message.mobile){
							toastr.error(obj.message.mobile, "Title");
						}
						if(obj.message.main){
							toastr.error(obj.message.main, "Title");
						}
						$("#email").parents('.inpt_group').show();
						$("#mobile").parents('.inpt_group').show();
						$("#password").parents('.inpt_group').show();
						$(".signup").hide();
						$("#otp_mn").hide();
					}	
				}
			});
		}else{
			toastr.error(error, "Title");
		}
	}));
	$(".signup").on('click',(function(e) {
		var isValid = true;
		e.preventDefault();
		var error = '';
		var otp = ($('#form1 input[name="otp"]').val());
		if (otp  == '') {	
			isValid = false;
			error = 'Please enter otp';
		}
		if(isValid){
			$.ajax({
				url:SITE_URL+"/ajax/registerwith_ajax.php",
				type: "POST",
				data:$("#form1").serialize(),
				success: function(response){
					var obj = $.parseJSON(response); 
					if(obj.status){	
						toastr.clear();					
						toastr.success(obj.message, "Title");
						$(".popup_overlay").hide();
						window.location.href=obj.message;
					}else{
						toastr.error(obj.message, "Title");
					}	
				}
			});
		}else{
			toastr.error(error, "Title");
		}
	}));
	$("#login_form").on('submit',(function(e) {
	    isValid = true;
		e.preventDefault();
		var error = '';
		var username = ($('#login_form input[name="username"]').val());
		if (username  == '') {
			isValid = false;
			error += 'Enter your email or username';
		}
		var password = ($('#login_form #pswrd').val());
		if (password  == '') {
			isValid = false;
			error += (error != '') ? '<br>' : "";
			error += 'Enter password';
		}  
		if(isValid){
			$.ajax({
				url:SITE_URL+"/ajax/login_ajax.php",
				type: "POST",            
				data: $("#login_form").serialize(), 
				success: function(response){
					var obj = $.parseJSON(response); 
					if(obj.status){						
						window.location.href=obj.message;               
					}else{
						toastr.error(obj.message, "Title");
					}		
				},error:function(jqXHR){
					/* if (jqXHR.status === 0) {
						alert('Not connect.\n Verify Network.');
					} else if (jqXHR.status == 404) {
						alert('Requested page not found. [404]');
					} else if (jqXHR.status == 500) {
						alert('Internal Server Error [500].');
					} else if (exception === 'parsererror') {
						alert('Requested JSON parse failed.');
					} else if (exception === 'timeout') {
						alert('Time out error.');
					} else if (exception === 'abort') {
						alert('Ajax request aborted.');
					} else {
						alert('Uncaught Error.\n' + jqXHR.responseText);
					} */
				}
						
			});
		}else{
			toastr.error(error, "Title");
		}
		return false;
	}));
	$(document.body).on('click','.resend_otp',function(){
		$(".popup_overlay .alert").remove();
		$("#timer").remove();
		$("#otp").val("");
		$.ajax({
			url:SITE_URL+"/ajax/resend_otp.php",
			type: "POST",            
			data: {mobile:$("#mobile").val()}, 
			success: function(response){
				var obj = $.parseJSON(response); 
				if(obj.status){
					toastr.clear();
					toastr.success(obj.message, "Title", {
						"timeOut": "0",
						"extendedTImeout": "0"
					});
					$(".otp").after("<div id='timer'></div>");
					document.getElementById('timer').innerHTML = 05 + ":" + 00;
					startTimer();					
				}else{
					toastr.error(obj.message, "Title");
				}		
			}
					
		});
	});
	$("#forgot_password_form").on('submit',(function(e) {
		isValid = true;
		e.preventDefault();
		var error = '';
		var username = ($('#forgot_password_form input[name="email"]').val());
		if (username  == '') {
			isValid = false;
			error += 'Enter your email address';
		}else if(!ValidateEmail($('#forgot_password_form input[name="email"]').val())){
			isValid = false;
			error += 'Invalid Email';
		}
		 
		if(isValid){
			$.ajax({
				url:SITE_URL+"/ajax/forgot_ajax.php",
				type: "POST",            
				data: new FormData(this), 
				contentType: false,      
				cache: false,           
				processData:false,       
				success: function(response){
					var obj = $.parseJSON(response); 
					if(obj.status){						
						toastr.success(obj.message, "Title");
						$("#email_address").val('');
						$(".popup_overlay").hide();
						setTimeout(function(){
							//window.location.href=obj.message;
						},2000);
					}else{
						toastr.error(obj.message, "Title");
					}		
				}
						
			});
		}else{
			toastr.error(error, "Title");
		}
	}));
	$("#reset_password_form").on('submit',(function(e) {
		isValid = true;
		var error = '';
		e.preventDefault();
		var new_password = ($('#reset_password_form input[name="new_password"]').val());
		var repeat_password = ($('#reset_password_form input[name="repeat_password"]').val());
		if (new_password  == '') {
			isValid = false;
			error += 'Please enter password';
		}
		if (repeat_password  == '') {
			isValid = false;
			error += (error != '') ? '<br>' : "";
			error += 'Please enter confirm password';
		}else if (new_password  != repeat_password) {
			isValid = false;
			error += (error != '') ? '<br>' : "";
			error += 'Repeat password should match new password';
		}
		if(isValid){
			$.ajax({
				url:SITE_URL+"/ajax/reset_password_ajax.php",
				type: "POST",            
				data: new FormData(this), 
				contentType: false,      
				cache: false,           
				processData:false,       
				success: function(response){
					var obj = $.parseJSON(response); 
					if(obj.status){						
						toastr.success(obj.message, "Title");
						$("#email_address").val('');
						//$(".popup_overlay").hide();
						setTimeout(function(){
							$(".popup_overlay .reset_password_form").remove();
							$(".popup_overlay").hide();
						},3000);
						
					}else{
						toastr.error(obj.message, "Title");
					}		
				}
						
			});
		}else{
			toastr.error(error, "Title");
		}
	}));
});