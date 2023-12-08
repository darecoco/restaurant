<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 진행중</title>
</head>
</html>
<?php
include "db_conn.php";
$id = $_POST['id'];
$pw = $_POST['pw'];
$sql_import = "insert into rest_user(u_id, u_pw) values('$id', '$pw')"; //새로 생긴 아이디와 비번 db에 넣는 용

$sql_judge = "select u_id from rest_user where u_id = '$id'"; //아이디 중복 검사용
$result = mysqli_query($conn, $sql_judge);
if(mysqli_num_rows($result) == 0){
    if(mysqli_query($conn, $sql_import)){
        echo "<script>alert('회원가입 성공!');</script>";
        echo "<script>location.href='index.php'</script>";
    }else{
        echo "<script>alert('죄송합니다. 에러로 인하여 회원가입이 취소되었습니다.');</script>";
    }
}else{
    echo "<script> alert('이미 있는 아이디 입니다.'); </script>";
    echo "<script>location.href='signup_form.html'</script>";
}
?>
