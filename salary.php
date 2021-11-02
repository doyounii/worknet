<?php
  //임금별 TOP 15
  
  $link = mysqli_connect('localhost:3307', 'root', 'rootroot', 'final');

  if (mysqli_connect_errno()) {
      echo "Failed to connect to DB: " . mysqli_connect_error();
      exit();
  }

  settype($_POST['saltpnm'], 'string');
  $saltpnm = mysqli_real_escape_string($link, $_POST['saltpnm']);


  $query = "SELECT distinct company, saltpnm, minsal, region,  closedt, wantedinfourl  FROM info where saltpnm='".$saltpnm."' order by minsal desc limit 15";
  $result = mysqli_query($link, $query);
  $emp_info = '';


  while ($row = mysqli_fetch_array($result)) {
      $emp_info .= '<tr>';
      $emp_info .= '<td>'.$row['company'].'</td>';
      $emp_info .= '<td>'.$row['saltpnm'].'</td>';
      $emp_info .= '<td style="background-color: #eaf7fe">'.$row['minsal']."원".'</td>';
      $emp_info .= '<td>'.$row['region'].'</td>';
      $emp_info .= '<td>'.$row['closedt'].'</td>';
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
      <h2><a href="index.php"> 채용 정보 시스템</a> | 임금별 정보 조회</h2>
      <h1> <?php echo $saltpnm ?> TOP 15 </h1>
      <h3> <?php echo $saltpnm ?>이 높은 순서대로 15개 채용 정보 </h3>
      <table border="1">
          <tr>
              <th>회사명</th>
              <th>임금형태</th>
              <th style="background-color:#a8daf9">급여</th>
              <th>근무지역</th>
              <th>마감일</th>
              <th>바로가기</th>
          </tr>
          <?= $emp_info ?>

      </table>
  </body>

  </html>

