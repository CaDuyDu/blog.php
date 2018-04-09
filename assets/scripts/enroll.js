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
            window.location.assign("index.php?mod=student&act=delete&id=" + id);
        }
    });
});


$('#user_search_btn').click(function(){
        input = $('#search_input').val();

	window.location.assign("index.php?mod=student&act=search&input="+input);	
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

function Enroll(class_id,student_id){
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
            window.location.assign("index.php?mod=class_room&act=enroll&class_id=" + class_id + "&student_id="+ student_id);
        }
    });
}