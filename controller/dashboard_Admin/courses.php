<?php
  require '../../viwe/header.php';

?>

<?php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $code =$_POST['code'];
    $name =$_POST['name'];
    $data = "$code : $name \n";
  $fhs = fopen("../../model/courses/courses.txt", "a+");
  fwrite($fhs, $data);
  fclose($fhs);

  print "Courses Submitted";
  }

?>
<form name="form1"  id='form1' method="post" >
  <div id='cont'>
  <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label"> Course code</label>
    <input type="text" class="form-control"  name="code" placeholder="Course">
  </div>
  <div class="mb-3">
    <label for="exampleDropdownFormEmail2" class="form-label"> Course Name</label>
    <input type="text" class="form-control"  name="name" placeholder="Course">
  </div>
  <td> <input type="submit" name="Save" value="Save"></td>

</div>
</form>
<form  >


<div id='form'>

   <?php
   echo '<table    font-weight: bold;   width= 400px; ;  
   border="3">';
   $file = fopen("../../model/courses/courses.txt", "r");
   while (!feof($file)){   
       $data = fgets($file); 
       echo "<tr><td  width= 150px>". str_replace(':','</td><td >',$data)  . '</td></tr>' ;
   }
   echo '</table>';
   fclose($file);
   ?>

</div>
</form>

<?php
  require '../../viwe/sidNav.php';
?>
        <?php
    require '../../viwe/footer.php'; 
  ?>