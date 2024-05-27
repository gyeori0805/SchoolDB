<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$message =  $_POST['message'];
	$message = ( ( ( $message == null ) || ( $message == "" ) || ( strncmp( $message, " * ", 3 ) == 0 ) ) ? "_%" : $message );

	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	// MySQL 책 검색 실행 및 결과 출력
	$query = "select * from student where name like '%".$message."%';";
	$resultSet = mysqli_query( $conn, $query );
	while( $result = mysqli_fetch_array( $resultSet ) )
	{
		echo "\n학년 : ".$result['grade'];
		echo "\n<BR>학번 : ".$result['studentid'];
		echo "\n<BR>이름 : ".$result['name'];
		echo "\n<BR>생년월일 : ".$result['birth'];
		echo "\n<BR>성별 : ".$result['gender'];
		echo "\n<BR>학적 : ".$result['studentrecord'];
		echo "\n<BR>전화번호 : ".$result['phonenumber'];
		echo "\n<BR><BR>";
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
