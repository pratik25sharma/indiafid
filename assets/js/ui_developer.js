$(document).ready(function(){ 
    closeModel(); // For Close model popup
    openModelB(); // For Open model popup bottom
    stopModel(); // For stop propagation of model box
});

/*STARTS POPUP MODEL USE ONLY*/
var modal = document.getElementById('myModal');

$(".model_box_child").each(function(){
     $(this).hide();
});

$('.open_model').on( "click", function(e) {
    e.preventDefault();
    var id = $(this).attr('data-target'); 
    $("div.model_box_child").each(function(){
        $(this).hide();
        if($(this).attr('id') == id) {
            $(this).show();
            $('#myModal').show();
            $('body').addClass('hidden');
        }
    });
});

function openModelB(){
    $('.open_modelb').on( "click", function(e) {
        e.preventDefault();
        var id = $(this).attr('data-target'); 

        var product_id = $(this).attr('product_id');
        var item_id = $(this).attr('item_id');
        $('#removeProduct').attr('pId',product_id);
        $('#removeProduct').attr('itemId',item_id);

        $("div.model_box_child").each(function(){
            $(this).hide();
            if($(this).attr('id') == id) {
                $(this).show();
                $('#myModal').show();
                $('body').addClass('hidden');
                $(this).parents('.model_box').addClass('bottom_view');
            }
        });
    });
    stopModel();
}

$('.open_modelf').on( "click", function(e) {
    e.preventDefault();
    var id = $(this).attr('data-target'); 
    $("div.model_box_child").each(function(){
        $(this).hide();
        if($(this).attr('id') == id) {
            $(this).show();
            $('#myModal').show();
            $('body').addClass('hidden');
            $(this).parents('.model_box').addClass('full_view');
        }
    });
});

$('span.close_model, #myModal').on('click', function(){
    $('#myModal').hide().children('.model_box').removeClass('bottom_view full_view');
    $('#myModal .model_box_child').hide();
    $('body').removeAttr('class');
    $("#wallet_verify").removeClass("disabled_opacity");
});

$('.close_model, .close, .close, #myModal').on('click', function(){
    $('#myModal').hide().children('.model_box').removeClass('bottom_view full_view');
    $('#myModal .model_box_child').hide();
    $('body').removeAttr('class');
    $("#wallet_verify").removeClass("disabled_opacity");
});

function closeModel(){
    $('span.close_model, .close_model, #myModal').on('click', function(){
        $('#myModal').hide().children('.model_box').removeClass('bottom_view full_view');
        $('#myModal .model_box_child').hide();
        $('body').removeAttr('class');
    });
}

function stopModel(){
    $('.model_box').on('click', function(e){
        e.stopPropagation();
    });
}
/*ENDS POPUP MODEL USE ONLY*/