<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$message =  $_POST['message'];
	$message = ( ( ( $message == null ) || ( $message == "" ) || ( strncmp( $message, " * ", 3 ) == 0 ) ) ? "_%" : $message );

	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	echo '<table border="1" bordercolor="skyblue" align = "center">';
	echo '<tr align = "center" bgcolor="skybule">';
	echo '<td style="font-size:30"> 학년 </td>';
	echo '<td style="font-size:30"> 학번 </td>';
 	echo '<td style="font-size:30"> 이름 </td>';
	echo '<td style="font-size:30"> 생년월일 </td>';
	echo '<td style="font-size:30"> 성별 </td>';
	echo '<td style="font-size:30"> 학적 </td>';
	echo '<td style="font-size:30"> 전화번호 </td>';
	echo '</tr>';

	// MySQL 책 검색 실행 및 결과 출력
	$query = "select * from student where name like '%".$message."%';";
	$resultSet = mysqli_query( $conn, $query );
	while( $result = mysqli_fetch_array( $resultSet ) )
	{
		echo '<tr align = "center">';
		echo '<td style="font-size:25">'; echo "⠀".$result['grade']."⠀"; echo '</td>';
		echo '<td style="font-size:25">'; echo "⠀".$result['studentid']."⠀"; echo '</td>';
		echo '<td style="font-size:25">'; echo "⠀".$result['name']."⠀"; echo '</td>';
		echo '<td style="font-size:25">'; echo "⠀".$result['birth']."⠀"; echo '</td>';
		echo '<td style="font-size:25">'; echo "⠀".$result['gender']."⠀"; echo '</td>';
		echo '<td style="font-size:25">'; echo "⠀".$result['studentrecord']."⠀"; echo '</td>';
		echo '<td style="font-size:25">'; echo "⠀".$result['phonenumber']."⠀"; echo '</td>';
		echo '</tr>';
	}

	echo '</table>';
	echo '<br><br><br>';

	// MySQL 드라이버 연결 해제
	mysqli_free_result( $resultSet );
	mysqli_close( $conn );
?>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( $message." 학생을 찾았습니다" );
?>
