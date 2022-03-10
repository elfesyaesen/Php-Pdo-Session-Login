<?php require_once 'db.php';
if(!empty($_SESSION['email'])) { header('location:index.php'); }
     if(isset($_POST['login'])) {
          $email = trim($_POST['email']);
          $password = trim($_POST['password']);
     if(empty($email) || empty($password)) {
          print 'Boş alan bırakmayın..!';
     }
    else {
      $query = $pdo->prepare("SELECT * FROM users WHERE email=? AND password=? ");
      $query->execute(array($email,$password));
      $row = $query->fetch(PDO::FETCH_ASSOC);
      if(count($row) > 0) {
        $_SESSION['email'] =  $row['email'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['user_id'] = $row['id'];
        header("location:index.php");
      }
      else { print 'Bilgileriniz Hatalı...!'; }
      }
     }
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP PDO SESSION LOGIN</title>

</head>
<body>
      <form  method="post" action="#">
          <input type="email"  name="email">
          <input type="password" name="password">
        <button type="submit" name="login">Login</button>
      </form>
</body>
</html>
