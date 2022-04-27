<?php
 
if(isset($_SESSION['use']))  
 {
    // header("Location:home.php"); 
 }
else
{
    // include 'login.php';
}
 
if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
     $type = $_POST['type'];

    //  $pass = md5($pass);
    if(isset($_POST["user"]) && isset($_POST["pass"])&&isset($_POST["type"])){
    $file = fopen('./model/users/userslog.txt', 'r');
    $good=false;
    while(!feof($file)){
        $line = fgets($file);
        $array = explode(":",$line);
    if(trim($array[0]) == $_POST['user'] && trim($array[1]) == $_POST['pass']&& trim($array[2]) == $_POST['type']){
            $good=true;
            break;
        }
    }
 
    if($good){
    $_SESSION['use'] = $user;
    if($_POST['type']==='Student'){
        echo '<script type="text/javascript"> window.open("./controller/dashboard_student/dashboard_student.php","_self");</script>';  
    }
    if($_POST['type']==='Teacher'){
          // header("./controller/dashboard_teacher/dashboard_teacher.php"); 

      echo '<script type="text/javascript"> window.open("./controller/dashboard_teacher/dashboard_teacher.php","_self");</script>';  
    }
      if($_POST['type']==='Admin'){
        // header("./controller/dashboard_teacher/dashboard_teacher.php"); 

    echo '<script type="text/javascript"> window.open("./controller/dashboard_Admin/dashboard_Admin.php","_self");</script>';  
  }
    }else{
        echo "invalid UserName or Password";
    }
    fclose($file);
    }
    else{
        include 'login.html';
    }
 
}
require './viwe/header.php';
require './viwe/nav.php'; 
?>

<form name="form1"  id='form1' method="post" >
  <div id='cont'>

  <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label">username</label>
    <input type="username" class="form-control"  name="user" placeholder="username">
  </div>

  <div class="mb-3">
    <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
    <input type="password" class="form-control"  name="pass" placeholder="Password">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormPassword2" class="form-label">Type</label>
    <select name="type" id="type"  class="form-select" >
      <option value="Teacher">Teacher</option>
      <option value="Student">Student</option>
      <option value="Parent">Parent</option>
      <option value="Admin">Admin</option>

    </select>  </div>
    <td> <input type="submit" name="login" value="LOGIN"></td>

  </div> 
</form>
<?php
    require './viwe/footer.php'; 

  ?>