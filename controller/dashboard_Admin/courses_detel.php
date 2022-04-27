<?php
  require '../../viwe/header.php';

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name =$_POST['name'];
    $teacherName =$_POST['teacherName'];
    $day =$_POST['day'];
    $descrebtion =$_POST['descrebtion'];
    $data = "teacherName: $teacherName \n Course name :$name \n Day: $day \n descrebtion : $descrebtion \n-------------------------------------\n ";
  $fhs = fopen("../../model/courses/coursesdetals.txt", "a+");
  fwrite($fhs, $data);
  fclose($fhs);
  print "Courses Submitted";
  }
?>

<form name="form1"  id='form1' method="post">
<div id='cont'>
  <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label"> Course name</label>
    <input type="text" class="form-control"  name="name" placeholder="name">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label"> teacher Name</label>
    <input type="text" class="form-control"  name="teacherName" placeholder="teacherName">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label"> Day</label>
    <input type="text" class="form-control"  name="day" placeholder="Day">
  </div> <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label">descrebtion</label>
    <input type="text" class="form-control"  name="descrebtion" placeholder="descrebtion">
  </div>

    

    </select> 
  <td> <input type="submit" name="Save" value="Save"></td>

</div>
</form>
<?php
  require '../../viwe/sidNav.php';
?>
 <?php
    require '../../viwe/footer.php'; 
  ?>