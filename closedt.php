<?php
  //마감일 순 채용 정보

  $link = mysqli_connect('localhost:3307', 'root', 'rootroot', 'final');

  if (mysqli_connect_errno()) {
      echo "Failed to connect to DB: " . mysqli_connect_error();
      exit();
  }

  $query = "SELECT distinct company, closedt, region, saltpnm, sal,  wantedinfourl  FROM info order by closedt asc limit 30";
  $result = mysqli_query($link, $query);
  $emp_info = '';

  while ($row = mysqli_fetch_array($result)) {
      $emp_info .= '<tr>';
      $emp_info .= '<td>'.$row['company'].'</td>';
      $emp_info .= '<td style="background-color: #eaf7fe">'.$row['closedt'].'</td>';
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
      <h2><a href="index.php"> 채용 정보 시스템</a> | 마감일 순 정보 조회</h2>
      <h1> 마감일 임박 30개의 채용 정보 </h1>
      <h3 style="color:#ff0066"> * 입사 지원 바로가기 링크를 통해 지금 바로 지원하세요* </h3>
      <table border="1">
          <tr>
              <th>회사명</th>
              <th style="background-color:#a8daf9">마감일</th>
              <th>근무지역</th>
              <th>임금형태</th>
              <th>급여</th>
              <th>입사 지원 바로가기</th>
          </tr>
          <?= $emp_info ?>

      </table>
  </body>

  </html>

