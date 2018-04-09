$('.delete_btn').click(function(){
    var id = $(this).attr('id');
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "Cancel!",
        closeOnConfirm: false
    },
    function(){{
            window.location.assign("index.php?mod=class_room&act=delete&id=" + id);
        }
    });
});

$('#search_btn').click(function(){
    input = $('#class_name').val();
    field = 'class_name';
	window.location.assign("index.php?mod=class_room&act=search&input="+input);	
});

//Datepicker
$('#orientation_time').datepicker( {
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd',
    yearRange: "2017:3000",
});
