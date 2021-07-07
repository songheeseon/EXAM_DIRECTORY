<html>
<head>
<title>회원가입 페이지</title>

</script>

<style>
  
    H1{
        color:#01DF01;
        font-size:70px;
        text-align:center;
        margin-bottom:10px;
        font-weight:700;
    }
    #zz{
        font-weight:900;
        text-align:center;
        font-size:30px;
    }
    #cs{
        font-weight:600;
        width:300px;
        margin:0px auto;
        border: 10px solid #819FF7;
        font-size:20px;
    }
    body{
        background-color:#F2F2F2;
    }
    

    
</style>
<body>
    <h1>NAVER</h1>
    <form method ="POST" action="join.php">
        <fieldset id = "cs">
        <legend id="zz">회원 가입</legend>
        아이디<br> <input type="text" id = "m_id" name="m_id" style=width:400px;height:45px; placeholder="홍길동"/></input><br/><br/>
        비밀번호<br> <input type="text" id = "m_password" name="m_password" style=width:400px;height:45px; /></input><br/><br/>
        전화번호<br> <input type="text" id = "m_phone_num" name="m_phone_num" style=width:400px;height:45px; placeholder="010-1111-2222"/></input><br/><br/>
        날짜<br> <input type="text" id = "m_date" name="m_date" style=width:400px;height:45px; placeholder="2021-07-07"/></input><br/><br/>
        성별<br> <input type="text" id = "m_gender" name="m_gender" style=width:400px;height:45px; placeholder="남자/여자"/></input><br/><br/>
        이메일<br> <input type="text" id = "m_email" name="m_email" style=width:400px;height:45px; placeholder="gildong@naver.com"/></input><br/><br/>
        <br><input type="submit" id="submit" value="가입하기" 
        style=width:400px;height:40px;color:#black;background-color:#01DF01;border:0;outline:0; /></input><br/>
        </fieldset>
        </form>

    
</body>
</head>

</html>