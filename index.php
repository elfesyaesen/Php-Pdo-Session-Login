<?php 
  include_once 'db.php';
  if(isset($_SESSION['user_id'])){ print 'Welcome :'.$_SESSION['firstname'].'<br><a href="logout.php">Oturumu Kapat</a>';  } else { header('location: login.php'); }
