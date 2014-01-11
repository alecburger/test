<?php 
  session_start();
  
  if($_SESSION['uid'] > 0) {
    header("Location:member.php");
  }else {
?>
  <html>
    
  </html>
<?php } ?>
