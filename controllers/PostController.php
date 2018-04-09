<?php
  include_once('models/Post.php');
  include_once('models/User.php');

  class PostController{
    private $user;

    public function __construct(){
      $this->user = new Post();
    }

    function index(){
      $data = $this->user->All();

      require_once('views/post/index.php');
    }

    function add(){
      require_once('views/post/add.php');

        if(isset($_FILES['image']))
        {
          if($_FILES['image']['error'] > 0)
            setcookie('msg','Image False!',time()+10);
          else
          {
            move_uploaded_file($_FILES['image']['tmp_name'],'Image/'.$_FILES['image']['name']);
            $data['image']="Image/".$_FILES['image']['name'];
          }
        }
    }

    function store(){

       $data = $_POST;
       $data['user_id'] = $_SESSION['user']['id'];
      
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

    public function add_post(){

      $p=1;

      if (isset($_GET['p'])) {
        $p=$_GET['p'];
      }

      $numb=8;

      $start=($p-1)*$numb;

      $num_page = $this->user->page($numb);

      $data = $this->user->dataPage($start,$numb);
      
      include_once('views/home/index.php');

    }

    public function see_post(){

      $id = $_GET['id'];

      $this->user->countView($id);
      
      $data = $this->user->find($id);
      include_once('views/home/single.php');
    }

    function delete(){
        $id = $_GET['id'];
        $status = $this->user->delete($id);
        
        echo json_encode([
          'data' => null,
          'status' => $status,
        ]);
    }
  }

 ?>
