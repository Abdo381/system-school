<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id =$_POST['id'];
  $username =$_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $type =$_POST['type'];
  // $password = md5($password);
  $data = "id: $id |username:$username |emai: $email |phone: $phone |password:  $password |type $type \n";
  $datelog= "$username:$password:$type \r \n"  ;
if($_POST['type']==='Student'){
$student = "$username : $type \n----------------------------\n";
$fhstu = fopen("./model/users/student.txt", "a" );
fwrite($fhstu, $student);
fclose($fhstu);

}
$fhs = fopen("./model/users/userslog.txt", "a");
$fh = fopen("./model/users/users.txt", "a");
fwrite($fh, $data);
fwrite($fhs, $datelog);
fclose($fh);
fclose($fhs);
print "User Submitted";
}

// }
  require './viwe/header.php';
  require './viwe/nav.php'; 
  ?>
<form name="form1"  id='form1' method="post" >
  <div id='cont'>
<div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label">ID</label>
    <input type="number" class="form-control"  name="id" placeholder="ID">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label">username</label>
    <input type="username" class="form-control"  name="user" placeholder="username">
  </div>
<div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
    <input type="email" class="form-control"  name="email" placeholder="email@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
    <input type="password" class="form-control"  name="password" placeholder="Password">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormPassword2" class="form-label">phone</label>
    <input type="phone" class="form-control" name="phone" placeholder="phone">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormPassword2" class="form-label">Type</label>
    <select name="type" id="type"  class="form-select" >
      <option value="Teacher">Teacher</option>
      <option value="Student">Student</option>
      <option value="Parent">Parent</option>
      <option value="Admin">Admin</option>

    </select>  </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </div> 
</form>
  <?php
    require './viwe/footer.php'; 

  ?>