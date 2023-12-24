<?php include('dbcon.php');?>
<?php include('index.php');?>
<?php session_start(); ?>

<?php
  

  if(isset($_POST['login'])){
    $username = $_POST['uname'];
    $email = $_POST['email'];
  }

  $query = "select * from `users` where `username` = '$username' and `email_id` = '$email'"; 

  $result = mysqli_query($conn, $query);

  if(!$result){
    die("query Failed" . mysqli_error());
  } 
  else{
    $row = mysqli_num_rows($result);
    echo  $row;

    if($row == 1){
        $_SESSION['uname'] = $username;
        header('location:home.php'); 
    }
    else{
        echo '<script>
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Your Username or email is invalid",
        });
      </script>';
    }
  }

?>