<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <hr>
        <form action="index.php?mod=user&act=store" method="POST" role="form">
            <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" class="form-control" id="" placeholder="Họ tên" name="name">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="mobile">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Nhập vào password" name="password">
            </div>
            <div class="form-group">
                <label for="">Giới tính </label><br>
                <input type="radio" name="gender" value="1"> Male
                <input type="radio" name="gender" value="0"> Female
                <input type="radio" name="gender" value="2"> Other
            </div>
             <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>
