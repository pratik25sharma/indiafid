<script type="text/javascript">
	var SITE_URL ="<?php echo SITE_URL ;?>";
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>   
<script src="<?php echo ASSET_URL; ?>js/common.js"></script>
   <script>
        var bnHeight = $(window).height()-40+'px';
        $(document).ready(function(e){
            $('.bn-viewport').css('height',bnHeight);
			if($(".reset_password_form").length >0){
				$('.popup_overlay').fadeIn();
                $('.popup_box').addClass('fadeInDown animated');
                $('.popup_box .forgot_password_form').hide();
                $('.popup_box .signup_form').hide();
                $('.popup_box .reset_password_form').show();
			}
            $('.sellWithUs').click(function(){
                $('.popup_overlay').fadeIn();
                $('.popup_box').addClass('fadeInDown animated');
                $('.popup_box .forgot_password_form').hide();
                $('.popup_box .signup_form').show();
            });
			$('.forgot_link').click(function(){
				var email = $("#login_form #username").val();
				if(email != ''){
					$("#forgot_password_form #email_address").val(email);
				}
                $('.popup_overlay').fadeIn();
                $('.popup_box').addClass('fadeInDown animated');
                $('.popup_box .signup_form').hide();
                $('.popup_box .forgot_password_form').show();
            });
            $(document.body).on('click','click, .close, .cancel_popup',function(){
                $('.popup_overlay').fadeOut();
                $('.popup_box').removeClass('fadeInDown animated');
            });
        });
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
             //>=, not <=
            if (scroll >= 100) {
                //clearHeader, not clearheader - caps H
                $(".header").addClass("darkHeader");
            }else{
                $(".header").removeClass("darkHeader");
            }
        });
    </script>
	
<?php 
if($page == 'login'){ ?>
	<script src="<?php echo ASSET_URL; ?>js/login.js"></script>
<?php }else if($page == 'dashboard'){ ?>
	<script src="<?php echo ASSET_URL; ?>js/dashboard.js"></script>
	<!--<script src="<?php //echo ASSET_URL; ?>js/bootstrap-tagsinput.js"></script>-->
<?php }else if($page == 'listings'){ ?>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css"/>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<!--<script src="<?php //echo ASSET_URL; ?>js/bootstrap-tagsinput.js"></script>-->
	<script src="<?php echo ASSET_URL; ?>js/listing.js"></script>
<?php }else if($page == 'orders'){ ?>
	<style>
		td.details-control {
			background: url('<?php echo ASSET_URL; ?>images/details_open.png') no-repeat center center;
			cursor: pointer;
		}
		tr.details td.details-control {
			background: url('<?php echo ASSET_URL; ?>images/details_close.png') no-repeat center center;
		}
	</style>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css"/>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<!--<script src="<?php //echo ASSET_URL; ?>js/bootstrap-tagsinput.js"></script>-->
	<script src="<?php echo ASSET_URL; ?>js/orders.js"></script>
<?php }else if($page == 'add_listing'){ ?>
	<link rel="stylesheet" href="<?php echo ASSET_URL; ?>lib/jquery-te/jquery-te-1.4.0.css">
	<script src="<?php echo ASSET_URL ?>lib/jquery-te/jquery-te-1.4.0.min.js"></script>
	<!--<script src="<?php //echo ASSET_URL; ?>js/bootstrap-tagsinput.js"></script>-->
	<script src="<?php echo ASSET_URL; ?>js/add_listing.js"></script>
	<script>$('textarea.description').jqte();</script>
<?php }else if($page == 'edit_listing'){ ?>
	<link rel="stylesheet" href="<?php echo ASSET_URL; ?>lib/jquery-te/jquery-te-1.4.0.css">
	<script src="<?php echo ASSET_URL ?>lib/jquery-te/jquery-te-1.4.0.min.js"></script>
	<!--<script src="<?php //echo ASSET_URL; ?>js/bootstrap-tagsinput.js"></script>-->
	<script src="<?php echo ASSET_URL; ?>js/edit_listing.js"></script>
	<script>$('textarea.description').jqte();</script>
<?php }
?>

</body>
</html>