$(document).ready(function(){
	$('#listing_table').DataTable({
		"order": [],
		"columnDefs": [ {
		  "targets"  : 'no-sort',
		  "orderable": false,
		}],
		"searching": false,
		"lengthChange": false
	});
	$(document.body).on('click','.download_excel',function(){
		$.ajax({
			method:'post',
			url:SITE_URL+'/ajax/download_excel.php',
			data: $("#filter_form").serialize(),
			method:'get',
			success:function(response){
				var filename = response.substring(response.lastIndexOf('/') + 1, response.length);
				var element = document.createElement('a');
				element.setAttribute('href', response);
				element.setAttribute('download', filename);
				element.style.display = 'none';
				document.body.appendChild(element);
				element.click();
				document.body.removeChild(element);
			}
		});
	});
	
	$(document.body).on('click','.bulk_upload',function(){
		$.ajax({
			method:'post',
			url:SITE_URL+'/ajax/bulk_upload_form.php',
			data:{categories : catArr},
			success:function(response){
				$(".popup_overlay .popup_box").replaceWith(response);
				$('.popup_overlay').fadeIn();
				$('.popup_box').addClass('fadeInDown animated');
			}
		})
	});
	$(document.body).on('submit',"#bulk_upload_form",function(e){
		e.preventDefault();
		$(".popup_overlay .alert").remove();
		$.ajax({
			url:SITE_URL+"/ajax/bulk_product_create.php",
			type: "POST",            
			data: new FormData(this), 
			contentType: false,      
			cache: false,           
			processData:false,       
			success: function(response){
				var obj = $.parseJSON(response); 
				if(obj.status){						
					$(".popup_overlay .details_form").prepend('<div class="alert alert-success">' +obj.message+'  </div>');
					$(".popup_overlay").hide();
					location.reload(true);
				}else{
					$(".popup_overlay .details_form").prepend('<div class="alert alert-danger">'+obj.message+'</div>');
				}		
			}
		});
	});
	$(document.body).on('click','.apply_filter',function(){
		$(this).closest("form").submit();
	});
	$(document.body).on('change','input[name="main_checkbox"]',function(){
		if($(this).is(":checked")){
			$("input[name='product_checkbox']").prop('checked',true);
		}else{
			$("input[name='product_checkbox']").prop('checked',false);
		}
	});
	$(document.body).on('change','.bulk_action select[name="bulk_action_apply"]',function(){
		if($(this).val() != ''){
			var action = $(this).val();
			if($("input[name='product_checkbox']:checked").length >0){
				if(confirm("Are you sure?")){
					var productIds = '';
					var comma = '';
					$("input[name='product_checkbox']:checked").each(function(){
						productIds += comma+$(this).val();
						comma = ',';
					});
					$.ajax({
						method:'post',
						url:SITE_URL+'/ajax/bulk_action.php',
						data:{productIds : productIds,action:action},
						success:function(response){
							if(action == 'active'){
								toastr.success("successfully activated products");
							}else if(action == 'deactive'){
								toastr.success("successfully deactivated products");
							}else if(action == 'delete'){
								toastr.success("successfully deleted products");
							}
							location.reload(true);
						}
					});
				}
			}else{
				toastr.error("Please select minimum 1 product.");
			}
		}
	})
	/*$(document.body).on('click','.add_category',function(){
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
	$(".listings_details").on('click',(function() {
		if(status == 1){
			$.ajax({
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
			});
		}else{
			toastr.warning("Your account should be approved.");
		}
	}));
	$(".edit_product").on('click',(function() {
		var id = $(this).data('id');
		if(id != '' && id != undefined){
			$.ajax({
				url:SITE_URL+"/ajax/listing_update_form.php",
				method:'post',
				data:{id:id},
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
			});
		}
	}));
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
					$(".popup_overlay .details_form").prepend('<div class="alert alert-success">' +obj.message+'  </div>');
					$(".popup_overlay").hide();
					location.reload(true);
				}else{
					$(".popup_overlay .details_form").prepend('<div class="alert alert-danger">'+obj.message+'</div>');
				}		
			}
		});
	});
	$(document.body).on('submit',"#listing_update",function(e){
		e.preventDefault();
		$(".popup_overlay .alert").remove();
		$.ajax({
			url:SITE_URL+"/ajax/update_listing.php",
			type: "POST",            
			data: new FormData(this), 
			contentType: false,      
			cache: false,           
			processData:false,       
			success: function(response){
				var obj = $.parseJSON(response); 
				if(obj.status){						
					$(".popup_overlay .details_form").prepend('<div class="alert alert-success">' +obj.message+'  </div>');
					$(".popup_overlay").hide();
					location.reload(true);
				}else{
					$(".popup_overlay .details_form").prepend('<div class="alert alert-danger">'+obj.message+'</div>');
				}		
			}
		});
	});*/
	$(document.body).on('click','.delete_product',function(){
		var currentElement = $(this);
		if(confirm("Are you sure?")){
			var id = currentElement.data('id');
			$.ajax({
				method:'post',
				url:SITE_URL+'/ajax/delete_product.php',
				data:{id : id},
				success:function(response){
					currentElement.parents('tr').remove();
				}
			})
		}
	});
});