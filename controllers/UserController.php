<?php
  include_once('models/User.php');
  class UserController{
    private $user;

    public function __construct(){
      $this->user = new User();
    }

    function index(){
      $data = $this->user->All();
      foreach ($data as $key => $value) {
        if($value['gender'] ==1){
          $data[$key]['gender'] = 'Male';
        }else if($value['gender'] ==0){
          $data[$key]['gender'] = 'Female';
        }else{
          $data[$key]['gender'] = 'Null';
        }
      }
      require_once('views/user/index.php');
    }

    function add(){
      // require_once('views/user/add.php');
      if(isset($_FILES['avatar']))
        {
          if($_FILES['avatar']['error'] > 0)
            setcookie('msg','Image False!',time()+10);
          else
          {
            move_uploaded_file($_FILES['avatar']['tmp_name'],'Image/'.$_FILES['avatar']['name']);
            $data['avatar']="Image/".$_FILES['avatar']['name'];
          }
        }

      // if (isset($_POST['SaveBtn'])) {
        
      //     $name = $_POST['name'];
      //     $mobile = $_POST['mobile'];
      //     $email = $_POST['email'];
      //     $avatar = $_POST['avatar'];
      //     $password = $_POST['password'];
      //     $addr = $_POST['address'];
      //     if ($name = ""||$mobile = ""|| $email = ""|| $avatar = ""|| $password = ""||$addr ="") {
      //       setcookie('msg','Vui lòng nhập trường này!');
      //       // $('#addUser').modal('show');
      //     }else{
      //       header('Location: ?mod=user');
      //     }
      // }

        $email = isset($_POST['email']) ? $_POST['email'] : false;
        if (!$email){
            die ('{error:"bad_request"}');
        }
        $error = array(
            'error' => 'success',
            'email' => ''
        );

       if ($email)
        {
            $query = mysqli_query($conn, 'select count(*) as count from member where email = \''.  addslashes($email).'\'');
         
            if ($query){
                $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
                if ((int)$row['count'] > 0){
                    $error['email'] = 'Email đã tồn tại';
                }
            }
            else{
                die ('{error:"bad_request"}');
            }
        }
        $query = mysqli_query($conn, "insert into member(email) value ('$email')");
        die (json_encode($error));
    }

    function store(){
      $data = $_POST;
      //unset($data['submit']);
      $data = $this->user->insert($data);

      if($data != null){
        echo json_encode([
          'data' => $data,
          'status' => true,
        ]);
      }else{
        echo json_encode([
          'data' => null,
          'status' => false,
        ]);
      }
      //header('Location: ?mod=user');
    }

    function edit(){
      $id = $_GET['id'];
      $data = $this->user->find($id);

      if($data != null){
        echo json_encode([
          'data' => $data,
          'status' => true,
        ]);
      }else{
        echo json_encode([
          'data' => null,
          'status' => false,
        ]);
      }
    }

    // function search(){
    //   $input = $_GET['input'];
    //   $data = $this->user->search($input);

    //   if($data != null){
    //     echo json_encode([
    //       'data' => $data,
    //       'status' => true,
    //     ]);
    //   }else{
    //     echo json_encode([
    //       'data' => null,
    //       'status' => false,
    //     ]);
    //   }
    // }

    function update(){
      $data = $_POST;
      //unset($data['submit']);
      $data = $this->user->update($data);

      if($data != null){
        echo json_encode([
          'data' => $data,
          'status' => true,
        ]);
      }else{
        echo json_encode([
          'data' => null,
          'status' => false,
        ]);
      }
    }

    function delete(){
      $id = $_GET['id'];
      $status = $this->user->delete($id);
      echo json_encode([
        'data' => null,
        'status' => $status,
      ]);
    }

    function detail()
    {
      $id = $_GET['id'];
      $data =$this->user->find($id);
      if($data != null){
        echo json_encode([
          'data' => $data,
          'status' => true,
        ]);
      }else{
        echo json_encode([
          'data' => null,
          'status' => false,
        ]);
      }
    }

  }
 ?>
