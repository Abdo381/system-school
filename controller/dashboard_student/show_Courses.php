<?php
  require '../../viwe/header.php';

?>
<form  >


<div id='form'>

   <?php
   echo '<table    font-weight: bold;   width= 350px; ;  
   border="3">';
   $file = fopen("../../model/courses/coursesdetals.txt", "r");
   while (!feof($file)){   
       $data = fgets($file); 
       echo "<tr><td  width= 250px>". str_replace(':','</td><td>',$data )  . '</td></tr>'  ;
   }
   echo '</table>';
   fclose($file);
   ?>
</div>
</form>
<?php
  require '../../viwe/sidebar.php';
?>
 <?php
    require '../../viwe/footer.php'; 
  ?>