<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 진행중</title>
</head>
</html>
<?php
include "db_conn.php";
$id = $_POST['id'];
$pw = $_POST['pw'];
$sql = "select u_pw from rest_user where u_id='$id'";

$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_row($result);
if($result != NULL){
    if($result[0] == "$pw"){
        echo "<script>alert('로그인 성공!');</script>";
        echo "<script>location.href='index.php'</script>";
    }else{
        echo "<script>alert('패스워드가 잘못되었습니다.');</script>";
        echo "<script>location.href='login_form.html'</script>";
    }
}else{
    echo "<script>alert('없는 아이디 입니다.');</script>";
    echo "<script>location.href='login_form.html'</script>";
}
?>