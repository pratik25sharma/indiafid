$(document).ready(function(){
	var files = [];
	var videofiles = [];
	$(document.body).on('click','.add_category',function(){
		$.ajax({
			method:'post',
			url:SITE_URL+'/ajax/categoryPopup.php',
			data:{categories : catArr},
			success:function(response){
				if($(".select_categories").length >0){
					$(".select_categories").replaceWith(response);
					$(".select_categories").parents('.popup_overlay').show();
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
	$(document.body).on('click','.save_categories_listing',function(){
		$(".loader").show();
		if(catArr.length>0){
			$.ajax({
				method:'post',
				url:SITE_URL+'/ajax/save_categories.php',
				data:{categories : catArr},
				success:function(response){
					$("select[name='category']").html(response);
					$(".popup_overlay").hide();
					$(".loader").hide();
				}
			})
		}
	});
	displayFieldsOfCategory('');
	$(document.body).on('change','select[name="category"]',function(){
		var category = $("select[name='category'] option:selected").text();
		category = category.toLowerCase();
		console.log(category);
		displayFieldsOfCategory(category);
	});
	$(document.body).on('change','#product_images',function(){
		var filesUploaded = $('#product_images').prop('files');
		
		$.each(filesUploaded, function( key, value ) {
		    $(".loader").show();
			var file_data = value;   
			var form_data = new FormData();                  
			form_data.append('file', file_data);
			$.ajax({
				url:SITE_URL+'/ajax/upload_product_images.php',
				type: "POST",
				data:  form_data,
				contentType: false,
				cache: false,
				processData:false,
				success:function(response){
					var obj = $.parseJSON(response);
					if(obj.status){
						$(".save_files .preview_box").append(obj.message);
						if(obj.file_names.length>0){
							$.each(obj.file_names,function(index,value){
								files.push(value);
							});
							$("input[name='product_files']").val(JSON.stringify(files));
						}
						$(".loader").hide();
					}
				}
			});
		});
	});
	$(document.body).on('change','#product_videos',function(){
		var filesUploaded = $('#product_videos').prop('files');
		
		$.each(filesUploaded, function( key, value ) {
		    $(".loader").show();
			var file_data = value;   
			var form_data = new FormData();                  
			form_data.append('file', file_data);
			$.ajax({
				url:SITE_URL+'/ajax/upload_product_videos.php',
				type: "POST",
				data:  form_data,
				contentType: false,
				cache: false,
				processData:false,
				success:function(response){
					var obj = $.parseJSON(response);
					if(obj.status){
						$(".save_videos .preview_box").append(obj.message);
						if(obj.file_names.length>0){
							$.each(obj.file_names,function(index,value){
								videofiles.push(value);
							});
							$("input[name='product_video_files']").val(JSON.stringify(videofiles));
						}
						$(".loader").hide();
					}
				}
			});
		});
	});
	$(document.body).on('click','.save_files .remove_icon',function(){
		var currentElement = $(this);
		var file_name = $(this).data("file-name");
		if(file_name != ''){
			$(".loader").show();
			$.ajax({
				url:SITE_URL+'/ajax/delete_file_product.php',
				method:'post',
				data:{file_name:file_name},
				success:function(response){
					removeA(files,file_name);
					$("input[name='product_files']").val(JSON.stringify(files));
					currentElement.parent(".save_files").remove();
					$(".loader").hide();
				}
			});
		}else{
			$(this).parent(".save_files").remove();
		}
	});
	$(document.body).on('click','.save_videos .remove_icon',function(){
		var currentElement = $(this);
		var file_name = $(this).data("file-name");
		if(file_name != ''){
			$(".loader").show();
			$.ajax({
				url:SITE_URL+'/ajax/delete_file_product.php',
				method:'post',
				data:{file_name:file_name},
				success:function(response){
					removeA(videofiles,file_name);
					$("input[name='product_video_files']").val(JSON.stringify(videofiles));
					currentElement.parent(".save_videos").remove();
					$(".loader").hide();
				}
			});
		}else{
			$(this).parent(".save_videos").remove();
		}
	});
	/* $(document.body).on('click','.save_files .error_box .remove_icon',function(){
		$(this).parents(".error_box").remove();
	});
	$(document.body).on('click','.save_videos .error_box .remove_icon',function(){
		$(this).parents(".error_box").remove();
	}); */
	$(document.body).on('click',".save_product",function(e){
		e.preventDefault();
		/* var ed = tinyMCE.get('description');
		var data = ed.getContent();
		$(".description").val(data); */
		var category = $("select[name='category'] option:selected").text();
		category = category.toLowerCase();
		if(category == 'wedding venues'){
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'wedding photographers'){
			$(".wedding_venues_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'bridal makeup'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'bridal wear'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'groom wear'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'wedding decorators' || category == 'wedding planner'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'wedding cards'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'wedding videography'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'bridal mehendi' || category == 'dj' || category == 'sangeet choreographers' ){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'wedding cakes'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'wedding jewellery'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'wedding catering'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'wedding accessories'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_favor_section").remove();
			$(".other_categories_section").remove();
		}else if(category == 'wedding favors'){
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".other_categories_section").remove();
		}else{
			$(".wedding_venues_section").remove();
			$(".wedding_photographers_section").remove();
			$(".bridal_makeup_section").remove();
			$(".bridal_wear_section").remove();
			$(".groom_wear_section").remove();
			$(".wedding_decorators_section").remove();
			$(".wedding_cards_section").remove();
			$(".wedding_videography_section").remove();
			$(".bridal_mehendi_section").remove();
			$(".wedding_cakes_section").remove();
			$(".wedding_jewellery_section").remove();
			$(".wedding_catering_section").remove();
			$(".wedding_accessories_section").remove();
			$(".wedding_favor_section").remove();
		}
		$(".alert").remove();
		
		var isValid = true;
		$(".listing_section").find("span.error").remove();
		$(".listing_section").find(".row").removeClass("has-error");
		$("#listing_add").find("input.required,textarea.required,select.required").each(function(){
			if(($(this).attr("name") == 'product_files' && ($(this).val() == '' || $(this).val() == '[]'))){
				isValid = false;
				$("#product_images").parents(".row").addClass('has-error');
				$("#product_images").after("<span class='error'>Plese select image</span>");
			}
			if($(this).is(":visible")){
				if($(this).val() == ''){
					isValid = false;
					$(this).parents(".row").addClass('has-error');
					$(this).after("<span class='error'>Please fill required fields</span>");
				}else if($(this).attr("type") == 'email' && !ValidateEmail($(this).val())){
					isValid = false;
					$(this).parents(".row").addClass('has-error');
					$(this).after("<span class='error'>Invalid Email</span>");
				}
			}
		});
		$("#listing_add").find("input[type='radio']").each(function(){
			if($(this).is(":visible")){
				var nameOfField = $(this).attr('name');
				if($("input[name='"+nameOfField+"']:checked").length == 0){
					if(!$(this).parents(".row").hasClass("has-error")){
						isValid = false;
						$(this).parents(".row").addClass('has-error');
						$(this).parents(".row").append("<span class='error'>Please fill required fields</span>");
					}
				}
			}
		});
		if(isValid){
			$(".loader").show();
			$.ajax({
				url:SITE_URL+"/ajax/add_listing.php",
				type: "POST",            
				data: $("#listing_add").serialize(), 
				success: function(response){
					var obj = $.parseJSON(response); 
					if(obj.status){						
						//$("#listing_add .details_form").prepend('<div class="alert alert-success">' +obj.message+'  </div>');
						toastr.success(obj.message);
						setTimeout(function(){
							window.location.href = SITE_URL+'/listings';
						},1000);
					}else{
						$("#listing_add .details_form").prepend('<div class="alert alert-danger">'+obj.message+'</div>');
					}	
					$(".loader").hide();					
				}
			});
		}
	});
});

function displayFieldsOfCategory(category){
	$(".loader").show();
	$(".wedding_venues_section").hide();
	$(".wedding_photographers_section").hide();
	$(".bridal_makeup_section").hide();
	$(".bridal_wear_section").hide();
	$(".groom_wear_section").hide();
	$(".wedding_decorators_section").hide();
	$(".wedding_cards_section").hide();
	$(".wedding_videography_section").hide();
	$(".bridal_mehendi_section").hide();
	$(".wedding_cakes_section").hide();
	$(".wedding_jewellery_section").hide();
	$(".wedding_catering_section").hide();
	$(".wedding_accessories_section").hide();
	$(".wedding_favor_section").hide();
	$(".other_categories_section").hide();
	if(category == 'wedding venues'){
		$(".wedding_venues_section").show();
	}else if(category == 'wedding photographers'){
		$(".wedding_photographers_section").show();
	}else if(category == 'bridal makeup'){
		$(".bridal_makeup_section").show();
	}else if(category == 'bridal wear'){
		$(".bridal_wear_section").show();
	}else if(category == 'groom wear'){
		$(".groom_wear_section").show();
	}else if(category == 'wedding decorators' || category == 'wedding planner'){
		$(".wedding_decorators_section").show();
	}else if(category == 'wedding cards'){
		$(".wedding_cards_section").show();
	}else if(category == 'wedding videography'){
		$(".wedding_videography_section").show();
	}else if(category == 'bridal mehendi' || category == 'dj' || category == 'sangeet choreographers' ){
		$(".bridal_mehendi_section").show();
	}else if(category == 'wedding cakes'){
		$(".wedding_cakes_section").show();
	}else if(category == 'wedding jewellery'){
		$(".wedding_jewellery_section").show();
	}else if(category == 'wedding catering'){
		$(".wedding_catering_section").show();
	}else if(category == 'wedding accessories'){
		$(".wedding_accessories_section").show();
	}else if(category == 'wedding favors'){
		$(".wedding_favor_section").show();
	}else{
		$(".other_categories_section").show();
	}
	$(".loader").hide();
}
function removeA(arr) {
	var what, a = arguments, L = a.length, ax;
	while (L > 1 && arr.length) {
		what = a[--L];
		while ((ax= arr.indexOf(what)) !== -1) {
			arr.splice(ax, 1);
		}
	}
	return arr;
}