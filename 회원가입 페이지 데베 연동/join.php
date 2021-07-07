<html>
<head>
    <style>
        H1{
        color:#01DF01;
        font-size:70px;
        text-align:center;
        margin-bottom:30px;
        font-weight:700;
         }
        #img{
            text-align:center; 
            margin-left:10px;
         }
    </style>

<body>
    <h1>NAVER</h1>
    <div id="img"><img src="/1/thanku.png">
    <h2>가입해주셔서 감사합니다 ^^</h2>
    <button type="button" onclick="location.href='member_join.php'">이전 페이지로 돌아가기.</button>




<?php
    ini_set('display_errors','0');

    $r_m_id = $_POST['m_id'];
    $r_m_password = $_POST['m_password'];
    $r_m_phone_num = $_POST['m_phone_num'];
    $r_m_date = $_POST['m_date'];
    $r_m_gender = $_POST['m_gender'];
    $r_m_email = $_POST['m_email'];
    
    if($r_m_id == "")
    {
        echo "<script>alert(\"ID를 입력하세요.\");</script>";
        echo "<script>window.location.href='/1/member_join.php';</script>";

        //sleep(1);
        //header('location: /1/member_join.php');
    }
    else if($r_m_password== "")
    {
        echo "<script>alert(\"PW를 입력하세요.\");</script>";
        echo "<script>window.location.href='/1/member_join.php';</script>";
        //header('location: member_join.php');
    }
    else if($r_m_phone_num== "")
    {
        echo "<script>alert(\"전화번호를 입력하세요.\");</script>";
        echo "<script>window.location.href='/1/member_join.php';</script>";
        //header('location: member_join.php');
    }
    else if($r_m_date== "")
    {
        echo "<script>alert(\"날짜를 입력하세요.\");</script>";
        echo "<script>window.location.href='/1/member_join.php';</script>";
        //header('location: member_join.php');
    }
    else if($r_m_gender== "")
    {
        echo "<script>alert(\"성별을 입력하세요.\");</script>";
        echo "<script>window.location.href='/1/member_join.php';</script>";
        //header('location: member_join.php');
    }
    else if ($r_m_email == "")
    {
        echo "<script>alert(\"Email을 입력하세요.\");</script>";
        echo "<script>window.location.href='/1/member_join.php';</script>";
        //header('location: member_join.php');
    }
   
    else{
   */ 
    $db_hostname = '127.0.0.1';
    $db_username = 'ssh';
    $db_password = '1234';
    $db_database = 'web_test';
    
    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);
    
    if(!$db_server)
    {
        echo "데이터베이스 서버에 연결 실패하였습니다.<br>";
    }
    else
    {
        echo "데이터베이스 서버에 연결되었습니다.<br>";
    }
    */
        $insert = "INSERT INTO member(
        m_id, m_password, m_phone_num, m_date, m_gender, m_email) values (
        '$r_m_id', '$r_m_password', '$r_m_phone_num', '$r_m_date','$r_m_gender', '$r_m_email')";

        $result = mysqli_query($db_server, $insert);
        if($result == false){
            echo mysqli_error($db_server);
            echo "<br>입력정보를 데이터베이스에 저장하지 못했습니다. ";
        }
  }
?>
</body>
</head>
</html>
 