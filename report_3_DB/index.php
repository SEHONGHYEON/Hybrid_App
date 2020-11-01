<!doctype html>
<html lang="ko">
  <head>
    <meta contentType="text/html; charset=utf-8" >
    <title>학생정보</title>
    <style>
      p {color: blue; bold; font-weight: bold; font-size:20px}
      body {
        font-family: 12px;
      }
      table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
        text-align: center;
      }
     

    </style>
  </head>
  <body>
	<p>학생정보 데이터베이스 출력<p>
    <table>
      <thead>
        <tr>
          <th>번호</th>
          <th>학생이름</th>
          <th>전공</th>
          <th>전화번호</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $jb_conn = mysqli_connect("127.0.0.1", "root", "", "test" );
          $jb_sql = "SELECT * FROM student";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr><td>' . $jb_row[ 'no' ] . '</td><td>'. $jb_row[ 'name' ] . '</td><td>' . $jb_row[ 'major' ] . '</td><td>' . $jb_row[ 'tel' ] . '</td></tr>';
          }
        ?>
      </tbody>
    </table>
  </body>
</html>
