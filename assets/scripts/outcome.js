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
            window.location.assign("index.php?mod=outcome&act=delete&id=" + id);
        }
        });
});

$('#search_btn').click(function(){
    input = $('#search_input').val();
    window.location.assign("index.php?mod=outcome&act=search&input="+input);
});