<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$message =  $_POST['message'];
	$message = ( ( ( $message == null ) || ( $message == "" ) || ( strncmp( $message, " * ", 3 ) == 0 ) ) ? "_%" : $message );

	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	echo '
	<table border="1" bordercolor="skyblue" align = "center">
	<tr align = "center" bgcolor="skybule">
	<td style="font-size:30">학년</td>
	<td style="font-size:30">학번</td>
 	<td style="font-size:30">이름</td>
	<td style="font-size:30">생년월일</td>
	<td style="font-size:30">성별</td>
	<td style="font-size:30">학적</td>
	<td style="font-size:30">전화번호</td>
	</tr>
 	</table>
 	';

	// MySQL 책 검색 실행 및 결과 출력
	$query = "select * from student where name like '%".$message."%';";
	$resultSet = mysqli_query( $conn, $query );
	while( $result = mysqli_fetch_array( $resultSet ) )
	{
		$a1 = $result['grade'];
		$a2 = $result['studentid'];
		$a3 = $result['name'];
		$a4 = $result['birth'];
		$a5 = $result['gender'];
		$a6 = $result['studentrecord'];
		$a7 = $result['phonenumber'];
		echo '
  		<table>
		<tr align = "center">
		<td style="font-size:25">$a1</td>
		<td style="font-size:25">$a2</td>
		<td style="font-size:25">$a3</td>
		<td style="font-size:25">$a4</td>
		<td style="font-size:25">$a5</td>
		<td style="font-size:25">$a6</td>
		<td style="font-size:25">$a7</td>
		</tr>
		</table>
  		';
	}

	// MySQL 드라이버 연결 해제
	mysqli_free_result( $resultSet );
	mysqli_close( $conn );
?>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( $message." 학생을 찾았습니다" );
?>
