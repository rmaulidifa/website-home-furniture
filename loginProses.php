<?php
    include "koneksi.php";
    session_start();
    $username=$_POST['username'];
    $password=md5($_POST['psw']);

    $query="SELECT * FROM pengguna WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect, $query);
    $cek=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    $_SESSION['username'] =$row['username'];

    if($row['level']==1){
        if($cek){
            echo '
            <script type="text/JavaScript"> 
                alert("Anda Berhasil Login!");
                document.location.href="admin/index.php"
            </script>';
            
        }else{
            echo '
            <script type="text/JavaScript"> 
                alert("Anda gagal login. Silakan melakukan Login kembali!!");
                document.location.href="login.php"
            </script>';
            echo mysqli_error($connect);
        }
        
    }else if($row['level']==2){
        if($cek){
            echo '
            <script type="text/JavaScript"> 
                alert("Anda Berhasil Login!");
                document.location.href="customer/index.php"
            </script>';
           
        }else{
            echo '
            <script type="text/JavaScript"> 
                alert("Anda gagal login. Silakan melakukan Login kembali!!");
                document.location.href="login.php"
            </script>';
            echo mysqli_error($connect);
        }
       
        echo mysqli_error($connect);
    }else{
        echo '
        <script type="text/JavaScript"> 
            alert("Anda gagal login. Silakan melakukan Login kembali!!");
            document.location.href="login.php"
        </script>';
       
        echo mysqli_error($connect);
    }
?>