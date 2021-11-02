<?php
//지원 자격별 채용 정보

    $link = mysqli_connect('localhost:3307', 'root', 'rootroot', 'final');

    if (mysqli_connect_errno()) {
        echo "Failed to connect to DB: " . mysqli_connect_error();
        exit();
    }

    settype($_POST['career'], 'string');
    $career = mysqli_real_escape_string($link, $_POST['career']);


    $query = "SELECT distinct company,career, region, saltpnm, sal, closedt, wantedinfourl  FROM info where career ='".$career."' ";
    $result = mysqli_query($link, $query);
    $emp_info = '';

    while ($row = mysqli_fetch_array($result)) {
        $emp_info .= '<tr>';
        $emp_info .= '<td>'.$row['company'].'</td>';
        $emp_info .= '<td style="background-color: #eaf7fe">'.$row['career'].'</td>';
        $emp_info .= '<td>'.$row['closedt'].'</td>';
        $emp_info .= '<td>'.$row['region'].'</td>';
        $emp_info .= '<td>'.$row['saltpnm'].'</td>';
        $emp_info .= '<td>'.$row['sal'].'</td>';
        $emp_info .= '<td style="text-align:center"><a href="'.$row['wantedinfourl'].'" >'."바로가기".'</a></td>';
        $emp_info .= '</tr>';
    }
    ?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title> 채용 정보 시스템</title>
    </head>

    <body>
        <h2><a href="index.php"> 채용 정보 시스템</a> | 지원자격별 정보 조회</h2>
        <table border="1">
            <tr>
                <th>회사명</th>
                <th style="background-color:#a8daf9">지원자격</th>
                <th>마감일</th>
                <th>근무지역</th>
                <th>임금형태</th>
                <th>급여</th>
                <th>입사 지원 바로가기</th>
            </tr>
            <?= $emp_info ?>

        </table>
    </body>

    </html>

