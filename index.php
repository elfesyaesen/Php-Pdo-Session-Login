<?php include_once 'db.php';
  if(isset($_SESSION['user_id'])){ print 'Welcome :'.$_SESSION['firstname']; } else { header('location: login.php'); }
