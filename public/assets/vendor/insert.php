<?php
require_once 'connection.php';
session_start();
if (isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM tbl_admin WHERE u_name='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    if ($row['u_name'] == $username){
        if($row['p_word']==$password){
          $_SESSION['u_name'] = $row['u_name'];
            header("Location: ../../index.php");
        }else{
            echo '<script>alert("Incorrect Password");
            window.location.replace("../../pages-login.html");
            </script>';
        }
    }else{
        echo '<script>alert("Incorrect Username");
        window.location.replace("../../pages-login.html");
        </script>';
    }
  $conn->close();
  }else{
    echo '<script>alert("Username and Password");
    window.location.replace("../../pages-login.html");
    </script>';
  }
}

if(isset($_POST['submit'])){
  $p_date = $_POST['p_date'];
  $p_name = $_POST['p_name'];
  $p_address = $_POST['p_address'];
  $p_age = $_POST['p_age'];
  $p_dop = $_POST['p_dop'];
  $p_parity = $_POST['p_parity'];
  $p_edd = $_POST['p_edd'];
  $p_gender = $_POST['p_gender'];
  $p_dod = $_POST['p_dod'];
  $p_dods = $_POST['p_dods'];
  $p_cod = $_POST['p_cod'];
  $w_eight = $_POST['w_eight'];
  $t_ime = $_POST['t_ime'];

  $sql = "INSERT INTO tbl_user (p_date, p_name, p_address,p_age,p_dop,p_parity,p_edd,p_gender,p_dod,p_dods,p_cod,w_eight,t_ime)
  VALUES ('$p_date', '$p_name', '$p_address','$p_age','$p_dop','$p_parity','$p_edd','$p_gender','$p_dod','$p_dods','$p_cod','$w_eight','$t_ime')";
  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Registration Successful")
    window.location.replace("../../forms-layouts.php");
    </script>';
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

}

if(isset($_POST['admin'])){
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $u_name = $_POST['u_name'];
    $p_word = $_POST['p_word'];
    $c_word = $_POST['c_word'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $z_code = $_POST['z_code'];
    $p_port = $_FILES['p_port']['name'];
    $tempname = $_FILES['p_port']['tmp_name'];
    $folder = '../img/' . $p_port;

    $sql = "INSERT INTO tbl_admin (f_name, l_name, u_name,p_word,c_word,p_port,city,statess,z_code)
    VALUES ('$f_name','$l_name','$u_name','$p_word','$c_word','$p_port','$city','$state','$z_code')";
    move_uploaded_file($tempname, $folder);
    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Registration Successful")
      window.location.replace("../../forms-validation.php");
      </script>';
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
  
  }


if (isset($_POST['update'])){
    $p_date = $_POST['p_date'];
    $p_name = $_POST['p_name'];
    $p_address = $_POST['p_address'];
    $p_age = $_POST['p_age'];
    $p_dop = $_POST['p_dop'];
    $p_parity = $_POST['p_parity'];
    $p_edd = $_POST['p_edd'];
    $p_gender = $_POST['p_gender'];
    $p_dod = $_POST['p_dod'];
    $p_dods = $_POST['p_dods'];
    $p_cod = $_POST['p_cod'];
    $id=$_POST['idd'];
    $sql = "UPDATE tbl_user SET p_date='$p_date', p_name='$p_name', p_address='$p_address', p_age='$p_age', p_dop='$p_dop', p_parity='$p_parity', p_edd='$p_edd', p_gender='$p_gender', p_dod='$p_dod', p_dods='$p_dods', p_cod='$p_cod' WHERE i_d='$id'";
    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Records Updated Successfully")
      window.location.replace("../../tables-general.php");
      </script>';
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
  
  }


  if(isset($_POST['a_update'])){
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $u_name = $_POST['u_name'];
    $p_word = $_POST['p_word'];
    $c_word = $_POST['c_word'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $z_code = $_POST['z_code'];
    $p_port = $_FILES['p_port']['name'];
    $tempname = $_FILES['p_port']['tmp_name'];
    $folder = '../img/' . $p_port;
    $id=$_POST['idd'];
    $sql = "UPDATE tbl_admin SET f_name='$f_name', l_name='$l_name', u_name='$u_name', p_word='$p_word', c_word='$c_word', city='$city',
     statess='$state', z_code='$z_code', p_port='$p_port' WHERE i_d='$id'";
    move_uploaded_file($tempname, $folder);
    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Record Updated Successfully")
      window.location.replace("../../tables-data.php");
      </script>';
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
  
  }
?>