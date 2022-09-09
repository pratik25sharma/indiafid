function format ( d ) {
	var html = '';
	if(d.email){
		html += 'Email:  '+d.email+'<br>';
	}
	if(d.function_time){
		html += 'Function time:  '+d.function_time+'<br>';
	}
	if(d.number_of_guests){
		html += 'Number of guests:  '+d.number_of_guests+'<br>';
	}
	if(d.number_of_rooms){
		html += 'Number of rooms:  '+d.number_of_rooms+'<br>';
	}
	if(d.details){
		html += 'Details:  '+d.details+'<br>';
	}
    return html;
}
 
$(document).ready(function() {
    var dt = $('#orders').DataTable( {
        "processing": true,
        "serverSide": true,
		"ajax": {
            "url": SITE_URL+"/ajax/get_orders.php",
            "type": "POST"
        },
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            { "data": "name" },
            { "data": "prod_name" },
            { "data": "mobile" },
            { "data": "function_date" }
        ],
        "order": [[1, 'asc']]
    } );
 
    // Array to track the ids of the details displayed rows
    var detailRows = [];
 
    $('#orders tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    } );
 
    // On each draw, loop over the `detailRows` array and show any child rows
    dt.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );
} );