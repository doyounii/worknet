<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>채용 정보 서비스</title>
    <style>
      #container {
        padding: 500px;
        border: 1px solid #a8daf9;
        background-color:#eaf7fe;
        width: 1000px;
        margin: 0px auto;
        margin-bottom: 1000px;
      }
      #header {
        text-align: center;
        background-color: #a8daf9;
        border-radius:100px;
        border: 10px solid #ffffff;
        padding: 20px;
        margin-bottom: 60px;
      }
      #left {
        margin-left: 70px;
        margin-right: 60px;
        margin-bottom: 100px;
        background-color: #a8daf9;
        width: 185px;
        padding: 20px;
        float: left;
        border: 1px solid #a8daf9;
      }
      #center {
        margin-right: 60px;
        margin-bottom: 20px;
        background-color: #a8daf9;
        width: 185px;
        padding: 20px;
        float: left;
        border: 1px solid #a8daf9;
      }
      #right {
        margin-right: 60px;
        margin-bottom: 20px;
        background-color: #a8daf9;
        width: 185px;
        padding: 20px;
        float: left;
        border: 1px solid #a8daf9;
      }
      a{
        color:black;
      }

    </style>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1> 채용 정보 서비스 </h1>
      </div>
      <div id="left">
        <h3 style="color:black"> 지역별 채용 정보 </h3>
        <form action="local.php" method="get">
         <input type="text" name="name" placeholder="ex) 서울, 경기, 경북, 대구">
         <input type="submit" value="Select"></br>
      </form>
      </div>
      <div id="center">
        <h3><a href="saltpnm.php"> 임금형태별 채용 정보 </a></h3>
      </div>
      <div id="right">
        <h3><a href="closedt.php"> 마감일 순 채용 정보 </a></h3>
      </div>
      <div id="center">
        <h3><a> 임금별 TOP 15 </a></h3>
        <form action="salary.php" name="saltpnm" method="POST" >
                      <input type = "radio" name = "saltpnm" value = "시급">시급
                      <input type = "radio" name = "saltpnm" value = "월급">월급
                      <input type = "radio" name = "saltpnm" value = "연봉">연봉
                    </select>
                    <input type="Submit" value="Select">
                </form>
      </div>
      <div id="right">
        <h3><a> 지원자격별 채용 정보  </a></h3>
        <form action="career.php" method="post">
                    <select name="career">
                      <option  label ="경력 선택" hidden>
                        <option value="경력">경력</option>
                        <option value="신입">신입</option>
                        <option value="관계없음">관계없음</option>
                    </select>
                    <input type="Submit" value="Select">
                </form>
      </div>
    </div>
  </body>
</html>

