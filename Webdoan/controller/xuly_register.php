<?php
if(isset($_POST["register"])){
    $user_name = $_POST["user_name"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    $name = $_POST["full_name"];
    //kiểm tra xem 2 mật khẩu có giống nhau hay không:
    if($pass1 != $pass2){
        header("location:register.php?page=register");
        setcookie("error", "Đăng ký không thành công!", time()+1, "/","", 0);
    }
    else{
        $pass = md5($pass1);
          mysqli_query($connect,"
            insert into user (user_name,password,full_name)
            values ('$user_name','$pass','$name')
        ");

        header("location:register.php?page=register");
        setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
    }
}

?>

