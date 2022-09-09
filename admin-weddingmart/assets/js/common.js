$(document).ready(function(){
	$(document.body).on('click','.change_status',function(){
		$(".status_text").hide();
		$(".status_dropdown").show();
		$(this).hide();
	});
	$(document.body).on('click','.change_is_vendor',function(){
		$(".is_vendor_text").hide();
		$(".is_vendor_dropdown").show();
		$(this).hide();
	});
	$(document.body).on('change','.status_dropdown',function(){
		var user_id = $("input[name='user_id']").val();
		var status = $(this).val();
		$.ajax({
			url: SITE_URL+"/ajax/change_user_status.php", 
			method:'post',
			data:{user_id:user_id,status:status},
			success: function(result){
				location.reload(true);
			}
		});
	})
	$(document.body).on('change','.users_table input[name="status"]',function(){
		var user_id = $("input[name='user_id']").val();
		var user_id = $(this).val();
		var status = 0;
		if($(this).is(":checked")){
			status = 1;
		}
		$.ajax({
			url: SITE_URL+"/ajax/change_user_status.php", 
			method:'post',
			data:{user_id:user_id,status:status},
			success: function(result){
				
			}
		});
	})
	$(document.body).on('change','.is_vendor_dropdown',function(){
		var user_id = $("input[name='user_id']").val();
		var is_vendor = $(this).val();
		$.ajax({
			url: SITE_URL+"/ajax/change_user_is_vendor.php", 
			method:'post',
			data:{user_id:user_id,is_vendor:is_vendor},
			success: function(result){
				location.reload(true);
			}
		});
	})
	$(".submit_btn").click(function(){
		$(this).closest("form").submit();
	});
	$(document.body).on('click',".go",function(){
		if(confirm("Are you sure ?")){
			var id = $(this).data("id");
			var row = $(this).parent().parent();
			$.ajax({
				url:SITE_URL+"/ajax/categories_delete.php", 
				method:'post',
				data:{cat_id:id},
				success:function(result){
					location.reload(true);
				}
			});
		}
	});
});

	

	

$(document).ready(function(){

	$("sub").click(function(){

	console.log($("#testform"))

	$("#testform").validate({	

	

		rules:{

			name:'required',

			description:'description',

			//image:'required',

		},

		message:{

			 name:'This field is required',

			 description:'This field is required',

		//	image:' This field is required',			

		},

	  submitHandler: function() {

		$("#testform").submit();

	  }



	});

	});

});







	

$(document).ready(function(){

    $(".remove").on('click',function(){

  var id = $(this).data("id");

  var img=$(this).parent();

		$.ajax({

url: SITE_URL+"/ajax/products_image_delete.php", 

method:'post',

data:{image_id:id},

success: function(result){

        img.remove();



}

});

		

          });

});



$(document).ready(function(){

$(".dlt").on('click',function(){

	var id= $(this).data("id");

	var txt = $(this).parent().parent();

	$.ajax({

url: SITE_URL+"/ajax/products_delete.php", 

method:'post',

data:{delete_id:id},

		success: function(result){

		txt.remove();

		alert('product delete');

}

});

		

          });

});



$(document).ready(function(){

$(document.body).on('click',".ok",function(){
	if(confirm("Are you sure ?")){
		var id=$(this).data("id");

		var pro= $(this).parent().parent();

		$.ajax({

			url:SITE_URL+"/ajax/user_delete.php",

			method:'post',

			data:{use_id:id},

			success:function(result){

				pro.remove();

				alert ('user delete');

			}

		});
	}
});
$(document.body).on('click',".delete_vendor",function(){
	if(confirm("Are you sure ?")){

		var id=$(this).data("id");

		var pro= $(this).parent().parent();

		$.ajax({

			url:SITE_URL+"/ajax/vendor_delete.php",

			method:'post',

			data:{use_id:id},

			success:function(result){

				pro.remove();

				alert ('user delete');
				location.reload(true);

			}

		});
	}

});
	});



$(document).ready(function(){

$(".pg").on('click',function(){

	var id=$(this).data("id");

	var dot= $(this).parent().parent();

	$.ajax({

		url:SITE_URL+"/ajax/page_delete.php",

		method:'post',

		data:{page_id:id},

		success:function(result){

			dot.remove();

			alert ('page delete');

		}

	});

	});

	});

	$(document).ready(function(){

		$(".ban").on('click',function(){

			var id=$(this).data("id");

			var banner=$(this).parent().parent();

			$.ajax({

		url:SITE_URL+"/ajax/banner_delete.php",

		method:'post',

		data:{banner_id:id},

		success:function(result){

			banner.remove();

			alert ('banner delete');

		}

	});

	});

	});

	

	

	$(document).ready(function(){

		  ClassicEditor.create(document.querySelector('#js'))

		  });