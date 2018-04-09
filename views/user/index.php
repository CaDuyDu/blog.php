<?php 
  include_once("views/layout/header.php");
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="main">
  <div class="main-content">
    <b><i><h3 align="center">ZENT GROUP - QUẢN LÝ NGƯỜI DÙNG</h3></i></b>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser"><i class="fa fa-plus" aria-hidden="true"></i>Thêm mới</button>
    <br><br>

    <table border="1" align="center" class="table" id="data_table">
      <thead>
        <tr align="center" class="flag">
          <td><b>ID</b></td>
          <td><b>Name</b></td>
          <td><b>Mobile</b></td>
          <td><b>Email</b></td>
          <td><b>Gender</b></td>
          <td><b>Action</b></td>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($data as $value) {
        ?>
          <tr id="user_<?= $value['id']?>">
            <td align="center" class="user_<?= $value['id']?>"><?= $value['id']?></td>
            <td class="user_<?= $value['id']?>"><?= $value['name']?></td>
            <td class="user_<?= $value['id']?>"><?= $value['mobile']?></td>
            <td class="user_<?= $value['id']?>"><?= $value['email']?></td>
            <td align="center" class="user_<?= $value['id']?>"><?= $value['gender'] ?></td>
            <td align="center" class="user_<?= $value['id']?>">
              <a href="javascript:;" type="button" onclick="viewUser(<?= $value['id']?>)" class="btn btn-success">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
              <a href="javascript:;" type="button" onclick="editUser(<?= $value['id']?>)" class="btn btn-primary">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </a>
              <a href="javascript:;" type="button" onclick="alertDel(<?= $value['id']?>)" class="btn btn-danger">
                <i class="fa fa-trash-o"></i>
              </a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <!-- Modal Add-->
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="addUser" align="center">Zent Group - Thêm Mới Người Dùng</h2>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form">
                <div class="form-group">
                    <label for="">Họ tên</label>
                    <input type="text" class="form-control" id="name" placeholder="Họ tên" name="name">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Nhập vào số điện thoại" name="mobile">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Nhập vào email" name="email">
                    <div id="showerror"></div>
                </div>
                <div class="form-group">
                  <label for="avatar">Avatar</label>
                  <input id="avatar" type="file" name="avatar" accept="image/gif, image/jpeg, image/png">

                  <!-- <input type="text" class="form-control" name="avatar"> -->
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Nhập vào password" name="password">
                </div>
                 <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" placeholder="Nhập vào địa chỉ" name="address">
                </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="SaveBtn" name="SaveBtn" class="btn btn-primary" value="Register">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit-->
    <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="editUser" align="center">Zent Group - Update Thông Tin</h2>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form">
                <div class="form-group">
                    <label for="">Họ tên</label>
                    <input type="text" class="form-control" id="ename" placeholder="Họ tên" name="name">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" id="emobile" placeholder="Nhập vào số điện thoại" name="mobile">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="eemail" placeholder="Nhập vào email" name="email">
                </div>
                 <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" id="eaddress" placeholder="Nhập vào địa chỉ" name="address">
                    <input type="hidden" class="form-control" id="user_id">
                </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="UpdateBtn" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal View-->
    <div class="modal fade" id="viewUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="editUser" align="center">Zent Group - Thông Tin Người Dùng</h2>
          </div>
          <div class="modal-body">
            <form id="frmImage" action="" method="POST" role="form">
              <div class="form-group">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <td>ID</td>
                      <td id="view_id"></td>
                    </tr>
                    <tr>
                      <td>Name</td>
                      <td id="vname"></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td id="vemail"></td>
                    </tr>
                    <tr>
                      <td>Avatar</td>
                      <td id="vavatar"></td>
                    </tr>
                    <tr>
                      <td>Mobile</td>
                      <td id="vmobile"></td>
                    </tr>
                    <tr>
                      <td>Birthday</td>
                      <td id="vbirthday"></td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td id="vaddress"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" id="UpdateBtn" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  <script type="text/javascript">
    $(document).ready(function () {
      $('#SaveBtn').click(function() {
        var name = $('#name').val();
        var mobile = $('#mobile').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var address = $('#address').val();
        // console.log(name);

        $.ajax({
          type: "post",
          url: '?mod=user&act=store',
          data: {
            name : name,
            mobile : mobile,
            email : email,
            password : password,
            address : address,
          },
          success: function(res)
          {
            console.log(res);
            if(!res.error) {
              var result = JSON.parse(res);
              console.log(result);
              var status = result.status;
              if(status){
                var data = result.data;
                data.gender = (data.gender ==1)?'Male':'Female';
                //var data = res['data'];
                //console.log(res['data']);
                //console.log(res.data.name);
                $('#addUser').modal('hide');
                var flag = $('.flag');
                var html ='<tr id="user_'+data.id+'">'+
                    '<td align="center">'+data.id+'</td>'+
                    '<td>'+data.name+'</td>'+
                    '<td>'+data.mobile+'</td>'+
                    '<td>'+data.email+'</td>'+
                    '<td align="center">'+data.gender+'</td>'+
                    '<td align="center">'+
                      '<a href="javascript:;" type="button" onclick="viewUser('+data.id+')" class="btn btn-success">'+
                        '<i class="fa fa-eye" aria-hidden="true"></i>'+
                      '</a>'+
                      '<a href="javascript:;" type="button" onclick="editUser('+data.id+')" class="btn btn-primary">'+
                        '<i class="fa fa-pencil" aria-hidden="true"></i>'+
                      '</a>'+
                      '<a href="javascript:;" type="button" onclick="alertDel('+data.id+')" class="btn btn-danger">'+
                        '<i class="fa fa-trash-o"></i>'+
                      '</a>'+
                    '</td>'+
                  '</tr>';
                $(html).insertAfter(flag);
                toastr.success('Thêm mới thành công!', 'Nafosted',{timeOut: 1000});
              }else{
                toastr.error('Thêm mới không thành công!', 'Nafosted',{timeOut: 1000})
                toastr.error('Email đã tồn tại!', 'Nafosted',{timeOut: 1000})
              }
            } else {
              toastr.error('Error', 'Nafosted-Error',{timeOut: 1000})
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
            toastr.error('Error', 'Nafosted-Error',{timeOut: 1000})

          }
        });
      });
    });

    //update
    function editUser(id) {

        $('#editUser').modal('show');

        $.ajax({
              type: "GET",
              url: "?mod=user&act=edit&id=" + id,
              success: function(res)
              {
                var result = JSON.parse(res);
                var status = result.status;
                if(status){
                  var data = result.data;
                  $('#ename').val(data.name);
                  $('#emobile').val(data.mobile);
                  $('#eemail').val(data.email);
                  $('#eaddress').val(data.address);
                  $('#user_id').val(id);
                }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                toastr.error(thrownError);
              }
        });
    }

    $(document).ready(function () {
      $('#UpdateBtn').click(function() {
        var name = $('#ename').val();
        var mobile = $('#emobile').val();
        var email = $('#eemail').val();
        var address = $('#eaddress').val();
        var id = $('#user_id').val();

        $.ajax({
          type: "post",
          url: '?mod=user&act=update',
          data: {
            id : id,
            name : name,
            mobile : mobile,
            email : email,
            address : address,
          },
          success: function(res)
          {
            console.log(res);
            if(!res.error) {
              var result = JSON.parse(res);
              var status = result.status;
              if(status){
                var data = result.data;
                data.gender = (data.gender ==1)?'Male':'Female';
                $('#editUser').modal('hide');
                var html ='<td align="center">'+data.id+'</td>'+
                    '<td>'+data.name+'</td>'+
                    '<td>'+data.mobile+'</td>'+
                    '<td>'+data.email+'</td>'+
                    '<td align="center">'+data.gender+'</td>'+
                    '<td align="center">'+
                      '<a href="javascript:;" type="button" onclick="viewUser('+data.id+')" class="btn btn-success">'+
                        '<i class="fa fa-eye" aria-hidden="true"></i>'+
                      '</a>'+
                      '<a href="javascript:;" type="button" onclick="editUser('+data.id+')" class="btn btn-primary">'+
                        '<i class="fa fa-pencil" aria-hidden="true"></i>'+
                      '</a>'+
                      '<a href="javascript:;" type="button" onclick="alertDel('+data.id+')" class="btn btn-danger">'+
                        '<i class="fa fa-trash-o"></i>'+
                      '</a>'+
                    '</td>';
                $('#user_'+data.id).html(html);
                toastr.success('Cập nhật thành công!', 'Nafosted',{timeOut: 1000});
              }else{
                toastr.error('Cập nhật không thành công!', 'Nafosted',{timeOut: 1000})
              }
            } else {
              toastr.error('Error', 'Nafosted-Error',{timeOut: 1000})
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
            toastr.error('Error', 'Nafosted-Error',{timeOut: 1000})

          }
        });
      });
    });

    // DELETE
    function alertDel(id){
      var path = "?mod=user&act=delete&id=" + id;
      swal({
        title: "Bạn có chắc muốn xóa?",
        // text: "Bạn sẽ không thể khôi phục lại bản ghi này!!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        cancelButtonText: "Không",
        confirmButtonText: "Có",
        // closeOnConfirm: false,
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
            type: "POST",
            url: path,
            success: function(res)
            {
              console.log(res);
              if(!res.error) {
                toastr.success('Xóa thành công!');
                $('#user_'+id).remove();
                //setTimeout(function () {
                  //location.reload();
                //}, 1000)
              }
            },
            error: function (xhr, ajaxOptions, thrownError) {
              toastr.error(thrownError);
            }
          });
        } else {
          toastr.info("Thao tác xóa đã bị huỷ bỏ!");
        }
      });
    }

    //view
  // $(document).ready(function () {
  //   $('#SaveBtn').click(function(e){
  //       e.preventDefault();
  //       //sử dụng ajax post
  //       $('#frmImage').ajaxSubmit({
  //           type: "POST",
  //           url: "?mod=user&act=detail&id=" + id, 
  //           // beforeSend: function(xhr){
  //           //     $('.loading').show();
  //           // },
  //           success: function(html){
  //               // $('.loading').hide();
  //               if(html.indexOf('_invalid_type') >= 0){
  //                   alert('Kiểu file không được phép !');
  //               } else if(html.indexOf('_invalid_size') >= 0){
  //                   alert('Kích thước file không được vượt quá 2MB !');
  //               }else{
  //                   // upload thành công
  //                   $("#frmImage").trigger('reset');
  //                   // $('#image-preview').attr('src', html);
  //                   $('.message').text('Upload thành công !').fadeIn().delay(2000).fadeOut();
  //               }
  //           }
  //       });
  //   });
  // });
    function viewUser(id) {

        $('#viewUser').modal('show');

        $.ajax({
              type: "GET",
              url: "?mod=user&act=detail&id=" + id,
              success: function(res)
              {
                var result = JSON.parse(res);

                var status = result.status;
                if(status){
                  var data = result.data;
                  console.log(data.avatar); 
                  var avatar = ' <img src="'+data.avatar+'" height="100px" width="100px">';
                  $('#vname').html(data.name);
                  $('#vmobile').html(data.mobile);
                  $('#vemail').html(data.email);
                  $('#vavatar').html(avatar);
                  $('#vaddress').html(data.address);
                  $('#view_id').html(id);
                }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                toastr.error(thrownError);
              }
        });
    }
    $('form').submit(function ()
      {
          // Xóa trắng thẻ div show lỗi
          $('#showerror').html('');
       
          var email = $('#email').val();
       
          // Kiểm tra dữ liệu có null hay không
       
          if ($.trim(email) == ''){
              alert('Bạn chưa nhập email');
              return false;
          }
       
          // Nếu bạn thích có thể viết thêm hàm kiểm tra định dang email
          // ở đây tôi làm chú yêu chỉ cách dùng ajax nên sẽ ko đề cập tới,
          // vì sợ bài dài sẽ rối
       
          $.ajax({
              url : '?mod=user&act=add',
              type : 'post',
              dataType : 'json',
              data : {
                  email : email
              },
              success : function (result)
              {
                  // Kiểm tra xem thông tin gửi lên có bị lỗi hay không
                  // Đây là kết quả trả về từ file do_validate.php
                  if (!result.hasOwnProperty('error') || result['error'] != 'success')
                  {
                      alert('Có vẻ như bạn đang hack website của tôi');
                      return false;
                  }
       
                  var html = '';
       
                  // Lấy thông tin lỗi username
                  if ($.trim(result.username) != ''){
                      html += result.username + '<br/>';
                  }
       
                  // Lấy thông tin lỗi email
                  if ($.trim(result.email) != ''){
                      html += result.email;
                  }
       
                  // Cuối cùng kiểm tra xem có lỗi không
                  // Nếu có thì xuất hiện lỗi
                  if (html != ''){
                      $('#showerror').append(html);
                  }
                  else {
                      // Thành công
                      $('#showerror').append('Thêm thành công');
                  }
              }
          });
       
          return false;
      });
  </script>
  
<?php 
  include_once("views/layout/footer.php")
 ?>
