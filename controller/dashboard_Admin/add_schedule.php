<?php
  require '../../viwe/header.php';
  
?>
<?php
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $day =$_POST['day'];
     $course =$_POST['course'];
     $data = "$day : $course \n ---------------------\n";
   $fhs = fopen("../../model/schedule/schedule.txt", "a+");
   fwrite($fhs, $data);
   fclose($fhs);
   echo "schedule Submitted";
   }
 ?>
<form name="form1"  id='form1' method="post">
<div id='cont'>
  <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label">Day</label>
    <input type="text" class="form-control"  name="day" placeholder="Day">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label"> course</label>
    <input type="text" class="form-control"  name="course" placeholder="course">
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