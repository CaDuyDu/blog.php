<?php 
  include_once("views/layout/header.php");
 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="assets/vendor/ckeditor/ckeditor.js"></script>
<div class="main">
  <div class="main-content">
    <b><i><h3 align="center">ZENT GROUP - QUẢN LÝ BÀI VIẾT</h3></i></b>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPost"><i class="fa fa-plus" aria-hidden="true"></i>Thêm mới</button>
    <br><br>
    <table border="1" align="center" class="table" id="data_table">
      <thead>
        <tr align="center" class="flag">
          <td><b>ID</b></td>
          <td><b>Title</b></td>
          <td><b>Description</b></td>
          <td><b>Contents</b></td>
          <td><b>Status</b></td>
          <td><b>Images</b></td>
          <td><b>Action</b></td>
        </tr>


      </thead>

      <tbody>

        <?php
        foreach ($data as $value) {
        ?>

          
          <tr id="user_<?= $value['id']?>">
            <td class="user_<?= $value['id']?>"><?= $value['id']?></td>
            <td class="user_<?= $value['id']?>"><?= $value['title']?></td>
            <td align="center" class="user_<?= $value['id']?>"><?= $value['description'] ?></td>
            <td class="user_<?= $value['id']?>"><?= $value['content']?></td>
            <td align="center" class="user_<?= $value['id']?>"><?= $value['status'] ?></td>
            <td class="user_<?= $value['id']?>"><img src="<?= $value['image']?>"></td>

            <td align="center" class="user_<?= $value['id']?>">
              <a href="javascript:;" type="button" onclick="viewPost(<?= $value['id']?>)" class="btn btn-success">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
              <br><br>
              <a href="javascript:;" type="button" onclick="editPost(<?= $value['id']?>)" class="btn btn-primary">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </a>
              <br><br>
              <a href="javascript:;" type="button" onclick="alertDelPost(<?= $value['id']?>)" class="btn btn-danger">
                <i class="fa fa-trash-o"></i>
              </a>
            </td>
          </tr>

        <?php
        }
        ?>

      </tbody>
    </table>

    <!-- Modal add post -->
    <div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="addPost" align="center">Zent Group - Thêm Mới Bài Viết</h2>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Nhập Title" name="name">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input id="image" type="file" name="image" accept="image/gif, image/jpeg, image/png">
                </div>
                <div class="form-group">
                    <label for="">Descritption</label>
                    <input type="text" class="form-control" id="description" placeholder="Nhập Description" name="email">
                </div>
                <div class="form-group">
                  <label for="avatar">Contents</label>
                  <textarea name="contents" placeholder="Contents" class ="contents"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" class="form-control" id="status" placeholder="Nhập Status" name="status">
                </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="SaveBtn" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal view post -->
    <div class="modal fade" id="viewPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="viewPost" align="center">Zent Group - Thông Tin Bài Viết</h2>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form">
              <div class="form-group">
                <table class="table table-hover" >
                  <tbody>
                    <tr>
                      <td>ID</td>
                      <td id="viewpost_id"></td>
                    </tr>
                    <tr>
                      <td>Title</td>
                      <td id="vtitle"></td>
                    </tr>
                    <tr>
                      <td>Image</td>
                      <td id="vimage"></td>
                    </tr>
                    <tr>
                      <td>Description</td>
                      <td id="vdescription"></td>
                    </tr>
                    <tr>
                      <td>Contents</td>
                      <td id="vcontent"></td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td id="vstatus"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal edit post -->
     <div class="modal fade" id="editPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="editPost" align="center">Zent Group - Update Thông Tin</h2>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form">
              <input type="hidden" class="form-control" id="user_id">
                <div class="form-group">
                    <label for="">Tille</label>
                    <input type="text" class="form-control" id="etitle" name="title">
                </div>
               <!--  <div class="form-group">
                    <label for="">Image</label>
                    <input id="eimage" type="file" name="image" accept="image/gif, image/jpeg, image/png">
                </div> -->
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" id="edescription"  name="description">
                </div>
                 <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="econtents" placeholder="Contents" id="econtents"></textarea>
                    
                </div>
                 <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" class="form-control" id="estatus"  name="status">
                </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="UpdateBtnPost" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<script>
  //add
  $(document).ready(function() {
    $('#SaveBtn').click(function() {
      var title = $('#title').val();
      var image = $('#image').val();
      var description = $('#description').val();
      var content = CKEDITOR.instances.contents.getData();
      var status = $('#status').val();

      $.ajax({
          type: "post",
          url: '?mod=post&act=store',
          data: {
            title : title,
            image : image,
            description : description,
            content : content,
            status : status,
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
                // data.gender = (data.gender ==1)?'Male':'Female';
                //var data = res['data'];
                //console.log(res['data']);
                //console.log(res.data.name);
                $('#addPost').modal('hide');
                var flag = $('.flag');
                var html =
                        '<tr id="user_'+data.id+'">'+
                            '<td align="center">'+data.id+'</td>'+
                            '<td align="center">'+data.user_id+'</td>'+
                            '<td align="center">'+data.title+'</td>'+
                            '<td>'+data.description+'</td>'+
                            '<td>'+data.content+'</td>'+
                            '<td>'+data.status+'</td>'+
                            '<td align="center">'+
                              '<a href="javascript:;" type="button" onclick="viewPost('+data.id+')" class="btn btn-success">'+
                                '<i class="fa fa-eye" aria-hidden="true"></i>'+
                              '</a>'+
                              '<br><br>'+
                              '<a href="javascript:;" type="button" onclick="editPost('+data.id+')" class="btn btn-primary">'+
                                '<i class="fa fa-pencil" aria-hidden="true"></i>'+
                              '</a>'+
                              '<br><br>'+
                              '<a href="javascript:;" type="button" onclick="alertDelPost('+data.id+')" class="btn btn-danger">'+
                                '<i class="fa fa-trash-o"></i>'+
                              '</a>'+
                            '</td>'+
                          '</tr>';
                $(html).insertAfter(flag);
                toastr.success('Thêm mới thành công!', 'Nafosted',{timeOut: 1000});
              }else{
                toastr.error('Thêm mới không thành công!', 'Nafosted',{timeOut: 1000})
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

   //view
    function viewPost(id) {

        $('#viewPost').modal('show');

        $.ajax({
              type: "GET",
              url: "?mod=post&act=detail&id=" + id,
              success: function(res)
              {
                var result = JSON.parse(res);

                var status = result.status;
                if(status){
                  var data = result.data;
                  var image = ' <img src="'+data.image+'" height="100px" width="100px">';
                  $('#viewpost_id').html(data.id);
                  $('#vtitle').html(data.title);
                  $('#vimage').html(image);
                  $('#vdescription').html(data.description);
                  $('#vcontent').html(data.content);
                  $('#vstatus').html(data.status);
                }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                toastr.error(thrownError);
              }
        });
    }
     
    //update
    function editPost(id) {

        $('#editPost').modal('show');

        $.ajax({
              type: "GET",
              url: "?mod=post&act=edit&id=" + id,
              success: function(res)
              {
                var result = JSON.parse(res);
                var status = result.status;
                if(status){
                  var data = result.data;
                  $('#etitle').val(data.title);
                  // $('#eimage').val(data.image);
                  $('#edescription').val(data.description);
                  CKEDITOR.instances.econtents.setData(data.content);
                  $('#estatus').val(data.status);
                }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                toastr.error(thrownError);
              }
        });
    }

    //update
    $(document).ready(function () {
        $('#UpdateBtnPost').click(function() {
          var title = $('#etitle').val();
          // var image = $('#eimage').val();
          var description = $('#edescription').val();
          var content = $('#econtents').val();
          var status = $('#estatus').val();

          $.ajax({
            type: "post",
            url: '?mod=post&act=update',
            data: {
              title : title,
              image : image,
              description : description,
              content : content,
              status : status,
            },
            success: function(res)
            {
              console.log(res);
              if(!res.error) {
                var result = JSON.parse(res);
                var status = result.status;
                if(status){
                  var data = result.data;
                  console.log(result.data);
                  $('#editPost').modal('hide');

                  var html ='<td align="center">'+data.id+'</td>'+
                      '<td>'+data.title+'</td>'+
                      '<td>'+data.image+'</td>'+
                      '<td>'+data.description+'</td>'+
                      '<td align="center">'+data.content+'</td>'+
                      '<td align="center">'+data.status+'</td>'+
                      '<td align="center">'+
                        '<a href="javascript:;" type="button" onclick="viewPost('+data.id+')" class="btn btn-success">'+
                          '<i class="fa fa-eye" aria-hidden="true"></i>'+
                        '</a>'+
                        '<a href="javascript:;" type="button" onclick="editPost('+data.id+')" class="btn btn-primary">'+
                          '<i class="fa fa-pencil" aria-hidden="true"></i>'+
                        '</a>'+
                        '<a href="javascript:;" type="button" onclick="alertDelPost('+data.id+')" class="btn btn-danger">'+
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
    //delete
    function alertDelPost(id){
      var path = "?mod=post&act=delete&id=" + id;
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
</script>
<!-- <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#data_table').DataTable();
      } );
    </script> -->
<?php 
  include_once("views/layout/footer.php")
 ?>


<!-- function editLoad(id){
        $.ajax({
                type: "GET",
                url: "<%=request.getContextPath()%>/ManageCategory?LoadEdit=" + id,
                header:{
                  Accept: "application/json; charset=utf-8",
                  "Content-Type": "application/json; charset=utf-8"
                },
                success: function(result)
                {
                  var result = $.parseJSON(result);
                    $('#eid').val(result.id);
                    $('#ename').val(result.name);
                    CKEDITOR.instances.CKEdit.setData(result.description);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                  toastr.error(thrownError);
                }
          });   
      }; -->




<!-- 

                      function editLoad(id){ 
                          var img = $('#avt_'+id+'').attr('alt');
                          $.ajax({
                              type: "GET",
                              dataType:'json',
                              url: "<%=request.getContextPath()%>/ManageUser?LoadEdit=" + id,
                              header:{
                                Accept: "application/json; charset=utf-8",
                                "Content-Type": "application/json; charset=utf-8"
                              },
                              success: function(result){
                                 
                                  $('#DivContent').css('display','none');
                            $('#DivEdit').css('display','block');
                            
                                  $('#id').val(result.id);
                                  $('#idEidt').html(result.id);
                                  $('#Eusername').val(result.username);
                                  $('#Efullname').val(result.fullName);
                                  $('#Edate').val(result.date);
                                  $('#old').attr('value',img);
                                  $('#avtEdit').attr('src','${pageContext.request.contextPath}/displayIMG'+img);
                                  $('#password').val("");
                              }});
                        } -->