$(document).ready(function(){
	$(document.body).on('click','.add_category',function(){
		$.ajax({
			method:'post',
			url:SITE_URL+'/ajax/categoryPopup.php',
			data:{categories : catArr},
			success:function(response){
				$(".listing_popup").hide();
				if($(".select_categories").length >0){
					$(".select_categories").replaceWith(response);
				}else{
					$(".listing_popup").after(response);
				}
			}
		})
	});
	$(document.body).on('click','.category_link',function(){
		var id = $(this).find("a").data('id');
		console.log(catArr);
		var index = catArr.indexOf(id);
		if(index == -1){
			catArr.push(id);
		}else{
			catArr.splice(index,1);
		}
		$(this).toggleClass('active');
	});
	$(document.body).on('click','.save_categories',function(){
		if(catArr.length>0){
			$.ajax({
				method:'post',
				url:SITE_URL+'/ajax/save_categories.php',
				data:{categories : catArr},
				success:function(response){
					$('.popup_overlay').fadeOut();
					$('.popup_box').removeClass('fadeInDown animated');
				}
			})
		}
	});
	$(document.body).on('click','.save_categories_listing',function(){
		if(catArr.length>0){
			$.ajax({
				method:'post',
				url:SITE_URL+'/ajax/save_categories.php',
				data:{categories : catArr},
				success:function(response){
					$(".listing_popup").find("select[name='category']").html(response);
					$(".listing_popup").show();
					$(".select_categories").hide();
				}
			})
		}
	});
	$(document.body).on('click','.bussiness_details',function(){
		$.ajax({
			method:'post',
			url:SITE_URL+'/ajax/bussiness_form_ajax.php',
			success:function(response){
				$(".popup_overlay .popup_box").replaceWith(response);
				$('.popup_overlay').fadeIn();
				$('.popup_box').addClass('fadeInDown animated');
				labeljumpcall();
			}
		})
	});
	$(document.body).on('submit',"#bussiness_form_update",(function(e){
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
					toastr.success(obj.message, "Title");
					$(".popup_overlay").hide();
				}else{
					toastr.error(obj.message, "Title");
				}				
			}
		});
	}));
	$(".bank_details").on('click',(function() {
		$.ajax({
			url:SITE_URL+"/ajax/bank_form_ajax.php",
			success: function(response){
				$(".popup_overlay .popup_box").replaceWith(response);
				$('.popup_overlay').fadeIn();
				$('.popup_box').addClass('fadeInDown animated');
				labeljumpcall();
			}
		});
	}));
	
	$(".listings_details").on('click',(function() {
		if(status == 1){
			/* $.ajax({
				url:SITE_URL+"/ajax/listing_details_ajax.php",
				success: function(response){
					$(".popup_overlay .popup_box").replaceWith(response);
					$('.popup_overlay').fadeIn();
					$('.popup_box').addClass('fadeInDown animated');
					$('.service_tag').tagsinput({
						allowDuplicates: false,
						confirmKeys: [13, 188]
					});
					$('.bootstrap-tagsinput input').on('keypress', function(e){
						if (e.keyCode == 13){
							e.keyCode = 188;
							e.preventDefault();
						};
					});
				}
			}); */
		}else{
			toastr.warning("Your account should be approved.");
		}
	}));
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
					toastr.success(obj.message, "Title");
					$(".popup_overlay").hide();
				}else{
					toastr.error(obj.message, "Title");
				}					
			}
		});
	}));
	$(".store").on('click',function(e) {
		e.preventDefault();
		$.ajax({
			url:SITE_URL+"/ajax/store_details_ajax.php",
			type: "POST",            
			success: function(response){
				$(".popup_overlay .popup_box").replaceWith(response);
				$('.popup_overlay').fadeIn();
				$('.popup_box').addClass('fadeInDown animated');
				labeljumpcall();
			}
		});
	});
	$(document.body).on('submit',"#store_form_update",function(e){
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
					toastr.success(obj.message, "Title");
					$(".popup_overlay").hide();
				}else{
					toastr.error(obj.message, "Title");
				}		
			}
		});
	});
	$(document.body).on('submit',"#listing_add",function(e){
		e.preventDefault();
		$(".popup_overlay .alert").remove();
		$.ajax({
			url:SITE_URL+"/ajax/add_listing.php",
			type: "POST",            
			data: new FormData(this), 
			contentType: false,      
			cache: false,           
			processData:false,       
			success: function(response){
				var obj = $.parseJSON(response); 
				if(obj.status){						
					toastr.success(obj.message, "Title");
					$(".popup_overlay").hide();
				}else{
					toastr.error(obj.message, "Title");
				}		
			}
		});
	});
});