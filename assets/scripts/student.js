$('.delete_btn').click(function(){
    var id = $(this).attr('id');
    swal({
        title: "Bạn có muốn xóa thông tin học viên?",
        //text: "You will not be able to recover this data!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Đồng ý",
        cancelButtonText: "Hủy",
        closeOnConfirm: false
    },
    function(){{
            window.location.assign("index.php?mod=student&act=delete&id=" + id);
        }
    });
});


$('#user_search_btn').click(function(){
        input = $('#search_input').val();

	window.location.assign("index.php?mod=student&act=search&input="+input);	
});

//Datepicker
$('#student_birthday').datepicker( {
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd',
    yearRange: "1990:2010",
});

$('.enroll_btn').click(function(){
    var class_id = $(this).attr('class_id');
    var student_id = $(this).attr('student_id');
    swal({
        title: "Thêm học viên vào lớp",
        text: "Bạn có chắc chắn muốn thêm học viên này vào lớp ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Đồng ý!",
        cancelButtonText: "Hủy!",
        closeOnConfirm: false
    },
    function(){{
            window.location.assign("index.php?mod=class&act=enroll&class_id=" + class_id + "&student_id="+ student_id);
        }
    });
});