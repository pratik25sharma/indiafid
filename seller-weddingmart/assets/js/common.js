$(document).ready(function(){
    $(".submit_btn").click(function(){
        $(this).closest("form").submit();
    });
	
$("#image").change(function() {
	console.log("here");
  readURL(this);
});
});


function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#logo').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}


$(document).ready(function(){
$(".online").click(function(){
console.log($("#testform"))
	$("#testform").validate({

				
			
	rules:{
		name_online_store:'required',
		//image:'required',
		online_store_description:'required'
			
	},
	message:{
		   

		 name_online_store:' This field is required',
	//	image:' This field is required',
		online_store_description:'This field is required',
		
		
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
  var remove = $(this).parent().parent();
		$.ajax({
url: SITE_URL+"/ajax/products_images_delete.php", 
method:'post',
data:{product_id:id},
success: function(result){
        remove.remove();

}
});
		
          });
});


		
	$(document).ready(function(){
    
		$("#startDate").datetimepicker();
	$("#endDate").datetimepicker();
	

	});
	
	
	
	$(document).ready(function(){
    $(".move").on('click',function(){
  var id = $(this).data("id");
      var row = $(this).parent().parent();
		$.ajax({
url: SITE_URL+"/ajax/coupon_delete.php", 
method:'post',
data:{coupon_id:id},
success: function(result){
         row.remove();
		     alert("Data deleted");
}
});
		
          });
});

	
$(document).ready(function(){
    $(".log").on('click',function(){
  var id = $(this).data("id");
      var pro = $(this).parent().parent();

  
		$.ajax({
url: SITE_URL+"/ajax/products_delete.php", 
method:'post',
data:{products_id:id},
success: function(result){
         pro.remove();
		     alert("Data deleted");
}
});
		
          });
});

	













