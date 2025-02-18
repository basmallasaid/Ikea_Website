<?php

include "functions/connection.php";
session_start();




//$r = mysqli_query($conn, "SELECT * FROM acc_table ");
$fn = $_SESSION['fname'];
$Ln = $_SESSION['lname'];
$Ph = $_SESSION['phone'];
$useremail = $_SESSION['email'];
$pas = $_SESSION['password'];
$p1 = $_SESSION['password'];
@$F = $_POST['f_name1'];
@$L = $_POST['l_name'];
@$p = $_POST['phone'];
@$ad = $_SESSION['address'];
@$e = $_POST['email'];

if (isset($_POST['f_button'])) {

  if (isset($_POST['n_pass'])) {
    if ($_POST['n_pass'] == $_POST['c_pass']) {
      $p1 = $_POST['n_pass'];
    } else {
      echo '
    
<script>
alert("The Confirm Password must be like New Password !!!");
window.location="profile.php";
</script>';
      exit();

    }
    // } else if (!isset($_POST['n_pass'])) {

    // $p1 = $_SESSION['password'];

    //}
  } else {

  }

  if (empty($F) || empty($L) || empty($e)) {
    header("Location: ../login.php?error=emptyfields");
    exit();
  } else {

    $upd = "UPDATE acc_table SET f_name='$F', l_name='$L', email='$e', password='$p1', phone='$p' WHERE email='$useremail'";

    mysqli_query($db, $upd);


    $_SESSION['fname'] = $F;
    $_SESSION['lname'] = $L;
    $_SESSION['password'] = $p1;
    $_SESSION['email'] = $e;
    //echo "$F $L $p $ad $e $p1 $pas";
     if($_SESSION['position']=='costumer') {
      

    echo '

  <script>
alert("The Changes Is Saved!!!!");
window.location="homepageuser.php";
</script>';
    }
    else{
      echo '

      <script>
    alert("The Changes Is Saved!!!!");
    window.location="homepageadmin.php";
    </script>';
    }

  }
}
//echo "$useremail";



//echo "$p1 $F $L $e $useremail";
//if($fn== '')  {}


//$row = mysqli_fetch_array($r);

?>
<!DOCTYPE html>
<html lang="en">




<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="profile.css">
  <title>Document</title>
</head>

<body>
  <form method="Post">
    <div class="container">
      <div class="card">
        <div class="info"> <span style="font-size: 20px;"><i class='bx bx-user' style="font-size: 30px;"></i>Edit
            profile</span>
          <button id="savebutton" name="f_button">edit</button>
          <button id="exitbutton" name='logout'>log out</button>
          <?php
          if(isset($_POST['logout'])){
            session_destroy();
            header("location: homepagegen.php");
              exit();
          }
          ?>

        </div>
        <div class="forms">
          <div class="inputs">
            <span>First Name</span>
            <input type="text" readonly name="f_name1" value="<?php echo "$fn" ?>" required>
            <span>Last Name</span>
            <input type="text" name="l_name" readonly value="<?php echo "$Ln" ?>" required>
            <span><i class='bx bx-envelope'></i>Email</span>
            <input type="email" name="email" value="<?php echo "$useremail" ?>" readonly ?>

            <span><i class='bx bxs-key'></i> password</span>
            <input type="password" name="o_pass" readonly required value="<?php echo "$pas" ?>">
            <span><i class='bx bxs-key'></i> New password</span>
            <input type="password" name="n_pass" readonly>
            <span><i class='bx bxs-key'></i> Confirm password</span>
            <input type="password" readonly name="c_pass" required>

            <?php if($_SESSION['position']=='costumer') {
               ?>
            <span><i class='bx bx-phone'></i> Phone number</span>
            <input type="tel" name="phone" readonly value="<?php echo "$Ph" ?>" required>
            
            <span><i class='bx bx-home'></i> Address</span>
            <input type="text" name="address" readonly value="<?php echo "$ad" ?>" required>
            <?php }
            ?>

          </div>
        </div>
      </div>
    </div>
  </form>
  <script src="profile.js"></script>

</body>


</html>