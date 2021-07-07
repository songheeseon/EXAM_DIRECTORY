<?php
    $db_hostname = '127.0.0.1';
    $db_database = 'web_test';
    $db_username = 'ssh';
    $db_password = '1234';

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);

    if(!$db_server)
    echo "데이터베이스 서버에 연결 실패하였습니다.<br>";
    else
    echo "데이터베이스 서버에 연결되었습니다.<br>";


    $select = "SELECT * FROM member";
    $result = mysqli_query($db_server, $select);
    while($board = $result->fetch_array())
    {
        $m_no = $board['m_no'];
        $m_id = $board['m_id'];
        $m_pw = $board['m_password'];
        $m_phone_num = $board['m_phone_num'];
        $m_date = $board['m_date'];
        $m_gender = $board['m_gender'];
        $m_email = $board['m_email'];
        echo <<<END
        <tbody>
            <tr>
                <td width="100">$m_no</td>
                <td width="100">$m_id</td>
                <td width="100">$m_pw</td>
                <td width="100">$m_phone_num</td>
                <td width="100">$m_date</td>
                <td width="100">$m_gender</td>
                <td width="100">$m_email</td>
                <br>
            </tr>
        </tbody>
END;
    }

    $insert = "INSERT INTO member(
        m_id, m_password, m_phone_num, m_date, m_gender, m_email) values (
        'id_test3', 'password', '010-3456-3456', '2021-07-07','남', 'test3@naver.com')";

    $result = mysqli_query($db_server, $insert);
        if($result == false){
            echo mysqli_error($db_server);
        }
?> 