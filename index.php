<?php
  // Start a session (which should use cookies over HTTP only).
  session_start();
  // Create a new CSRF token.
  if (! isset($_SESSION['csrf_token'])) {
      $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
  }
    
    if(isset($_GET['mod'])){
      $mod = $_GET['mod'];
      if(isset($_GET['act'])){
        $act = $_GET['act'];
      }else{
        $act = 'index';
      }
    }else{
      $mod = 'index';
      $act = 'add-post';
    }

  switch ($mod) {

    case 'index':{
      include_once('controllers/PostController.php');
      $controller = new PostController();
      switch ($act){
        case 'index':{
          $controller->index();
        }break;
       case 'add-post':{
          $controller->add_post();
        }break;
      }
    }break;

    case 'login':{
        include_once('controllers/LoginController.php');
        $login = new LoginController();
        switch ($act) {
          case 'index':{
            $login->showLoginForm();
          }break;

          case 'login':{
            $login->loginSubmit();
          }break;
        }
    }break;
      
    case 'user':{
      include_once('controllers/UserController.php');
      $controller = new UserController();
      switch ($act) {
        case 'index':{
          $controller->index();
        }break;

        case 'add':{
          $controller->add();
        }break;

        case 'store':{
          $controller->store();
        }break;

        case 'detail':{
          $controller->detail();
        }break;

        case 'edit':{
          $controller->edit();
        }break;

        case 'update':{
          $controller->update();
        }break;

        case 'search':{
          $controller->search();
        }break;

        case 'delete':{
          $controller->delete();
        }break;

        default:{
          echo "<h2>404 - File not found !</h2>";
        }break;
      }
    }break;

    case 'post':{
      include_once('controllers/PostController.php');
      $controller = new PostController();
      switch ($act) {
        case 'index':{
          $controller->index();
        }break;

        case 'add':{
          $controller->add();
        }break;

        case 'store':{
          $controller->store();
        }break;

         case 'detail':{
          $controller->detail();
        }break;
        
        case 'edit':{
          $controller->edit();
        }break;

        case 'update':{
          $controller->update();
        }break;

        case 'delete':{
          $controller->delete();
        }break;

         case 'see-post':{
          $controller->see_post();
        }break;

        case 'page-post':{
          $controller->page_post();
        }break;

        default:{
          echo "<h2>404 - File not found !</h2>";
        }break;
      }
    }break;

    case 'tag':{
        // if(!isset($_SESSION['login'])) header('Location: ?mod=login');
        include_once 'controllers/TagController.php';
        $controller = new TagController();
        switch ($act) {
          case 'index':{
            $controller->index();
          }break;

          default:{
            echo "<h1><center><b>404 - NOT FOUND</b></center></h1>";
          }break;
        }
    }break;

    case 'logout':{
        include_once 'Controllers/LoginController.php';
        $controller = new LoginController();
        $controller->logout();
    }break;

    default:{
      echo "<h2>404 - File not found !</h2>";
    }break;
  }
 ?>
