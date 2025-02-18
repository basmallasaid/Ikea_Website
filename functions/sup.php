<?php
include "connection.php";
if(isset($_POST['Register'])){
    $pa1=$_POST['password'];
    $pa2=$_POST['password_confirm'];


    if($pa1!=$pa2){
        echo $pa1.'<br>';
        echo $pa2;

				;

						exit();
    }
    else{
       $f_name=$_POST['firstname'];
       $l_name=$_POST['lastname'];
       $pass=$_POST['password'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $address=$_POST['address'];
       $user=$_POST['username'];


        $sql="INSERT INTO `acc_table`( `f_name`, `l_name`, `email`, `position`, `username`, `password`, `phone`, `address`)
         VALUES ('$f_name','$l_name','$email','costumer','$user','$pass','$phone','$address')";
         if (mysqli_query($db, $sql)) {
            echo '
            <script>
            alert("SignedUp succesfully!!");
            window.location="../login.php";
        </script>';

                exit();
          } else {
            echo '
            <script>
                alert("unsuccessfull signed up !!!");
                window.location="../signup.php";
            </script>';
				exit();
          }


    }

}
?>